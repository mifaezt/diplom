<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Личный кабинет')

@section('content')


<div class="container">
<section class="profile-section">
        <h2>Личный кабинет</h2>
        <h3> Добро пожаловать {{auth()->user()->name}}</h3>
        <a href="{{route('logout')}}">Выйти</a>
        <h2>Мой профиль</h2>
            <p><strong>Имя:</strong> Иван Иванов</p>
            <p><strong>Email:</strong> ivan@example.com</p>
            <p><strong>Телефон:</strong> +7 (123) 456-78-90</p>
            <button>Редактировать профиль</button>
        </section>

    
    </div>
    <footer>
        <p>&copy; 2025 Jarviranta. Все права защищены.</p>
    </footer>
</div>

@endsection