FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

RUN mkdir -p /etc/nginx/conf.d/
RUN echo 'server { listen 80; root /var/www/html/public; index index.php; location / { try_files $uri $uri/ /index.php?$query_string; } location ~ \.php$ { fastcgi_pass 127.0.0.1:9000; fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; include fastcgi_params; } }' > /etc/nginx/conf.d/default.conf

RUN php artisan storage:link || true

EXPOSE 80

CMD ["sh", "-c", "composer install --no-interaction --optimize-autoloader && php artisan migrate --force && service nginx start && php-fpm"]
