<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Кузнечный цех - @yield('title')</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family: Arial, sans-serif; background:#f4f4f4; display:flex; flex-direction:column; min-height:100vh; }
        nav { background:#2c3e50; padding:1rem; text-align:center; }
        nav a { color:white; margin:0 1.5rem; text-decoration:none; font-weight:bold; }
        nav a:hover { color:#f1c40f; }
        .container { max-width:1200px; margin:2rem auto; padding:2rem; background:white; border-radius:10px; flex:1; width:95%; }
        .gallery { display:grid; grid-template-columns:repeat(auto-fill, minmax(250px,1fr)); gap:1.5rem; margin:2rem 0; }
        .gallery img { width:100%; height:200px; object-fit:cover; border-radius:10px; box-shadow:0 3px 10px rgba(0,0,0,0.2); }
        footer { background:#2c3e50; color:#ecf0f1; text-align:center; padding:25px 20px; margin-top:50px; border-top:3px solid #f1c40f; }
        footer p { margin:5px 0; }
        .footer-dev { font-weight:bold; }
        .footer-group { opacity:0.9; }
        .footer-copy { font-size:14px; opacity:0.8; }
        h1 { color:#2c3e50; margin-bottom:1rem; }
        .admin-link { background:#c0392b; padding:0.5rem 1rem; border-radius:5px; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Главная</a>
        <a href="/about">О нас</a>
        <a href="/contacts">Контакты</a>
        <a href="http://127.0.0.1:8001/admin" class="admin-link">Админ-панель</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <p class="footer-dev">Масальская Ангелина Михайловна</p>
        <p class="footer-group">Группа: ИТ-31 | Курсовой проект "Кузнечный цех"</p>
        <p class="footer-copy">© 2026 Все права защищены</p>
    </footer>
</body>
</html>
