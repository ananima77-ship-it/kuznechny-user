<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body { margin:0; font-family: Arial; background: #f4f4f4; }
        nav { background: #2c3e50; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 20px; text-decoration: none; font-size: 18px; }
        .container { max-width: 1200px; margin: 30px auto; background: white; padding: 30px; border-radius: 10px; }
        .gallery { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin: 30px 0; }
        .gallery img { width: 300px; height: 200px; object-fit: cover; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
        footer { background: #34495e; color: white; text-align: center; padding: 20px; margin-top: 30px; }
        h1 { color: #2c3e50; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Главная</a>
        <a href="/about">О нас</a>
        <a href="/contacts">Контакты</a>
        <a href="http://127.0.0.1:8001/admin" style="background:#c0392b; padding:10px 20px; border-radius:5px;">Админ-панель</a>
    </nav>
    <div class="container">
        <h1>{{ $title }}</h1>
        <div class="gallery">
            @foreach($photos as $photo)
                <img src="/images/{{ $photo }}" alt="Фото">
            @endforeach
        </div>
        <p>{{ $content }}</p>
    </div>
    <footer>© 2026 Кузнечный цех</footer>
</body>
</html>
