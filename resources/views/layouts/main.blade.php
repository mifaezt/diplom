<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/style.css">
  <title>@yield('title', 'Aframe')</title>
</head>
<body>
 
<nav class="navbar">
        <div class="navbar-content">
            <div class="logo">Логотип</div>
            <div class="slogan">Ваш слоган здесь</div>
            <div class="social-icons">
                <a href="#" class="icon">🔗</a> <!-- Здесь замените на иконки социальных сетей -->
                <a href="#" class="icon">🔗</a>
                <a href="#" class="icon">🔗</a>
            </div>
        </div>
        <hr class="divider">
        <ul class="nav-links">
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Правила проживания</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Чем заняться</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Вход</a></li>
        </ul>
    </nav>

<!-- Основной контент -->
<main>
  <div class="container">
    @yield('content')
  </div>
</main>

</body>
</html>