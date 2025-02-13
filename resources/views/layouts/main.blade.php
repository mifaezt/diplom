<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="icon" href="{{ asset('icons/favicon.ico') }}">
  <title>@yield('title', 'Aframe')</title>
</head>
<body>
 
<nav class="navbar">
        <div class="navbar-content">
            <a href="{{ route('home') }}" >
              <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
            </a>
            <div class="slogan"> <h1>Ваш идеальный отдых начинается здесь <br> уют, природа и комфорт под одной крышей! </h1></div>
            <div class="social-icons">
                <a href="https://vk.com/" target="_blank" class="icon">
                  <img src="{{ asset('icons/vk.png') }}"  alt="vk">
                </a>
                <a href="https://blog.whatsapp.com/whats-app-web?lang=ru_RU" target="_blank" class="icon">
                <img src="{{ asset('icons/whatsapp.png') }}" alt="whatsupp">
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="icon">
                <img src="{{ asset('icons/instagram.png') }}" alt="instagram">
                </a>
                <a href="https://web.telegram.org/" target="_blank" class="icon">
                <img src="{{ asset('icons/telegram.png') }}" alt="telegram">
                </a>
            </div>
        </div>
        <hr class="divider">
        <ul class="nav-links">
          <!-- Условия маршрутов -->
          @if (Route::has('login'))
            @auth
            <li><a href="{{ route('#') }}">Личный кабинет</a></li>
            @else
              <li><a href="{{ route('home') }}">Главная страница</a></li>
              <li><a href="{{ route('about') }}">О нас</a></li>
              <li><a href="{{ route('home') }}">Контакты</a></li>
              <li><a href="{{ route('home') }}">Правила проживания</a></li>
              <li><a href="{{ route('home') }}">Цены</a></li>
              <li><a href="{{ route('home') }}">Чем заняться</a></li>
              <li><a href="{{ route('home') }}">Новости</a></li>
              <li><a href="{{ route('login') }}">Вход</a></li>
            @endif
          @endif
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