<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Регистрация')

@section('content')

<div class="container">
    <div class="form-container">
        <h2>Вход</h2>
        <form>
            <div id="name" class="form-group">
                <input type="text" placeholder="Имя" name = "name" required>
            </div>

            <div class="form-group">
                <input type="email" placeholder="Почта" name = "email" required>
            </div>

            <div class="form-group">
                <input type="phone" placeholder="Телефон" name = "phone" required>
            </div>

            <div class="form-group">
                <input type="password" placeholder="Пароль" name = "password" required>
            </div>

            <div class="form-group">
                <input type="password_confirmation" placeholder="Повторите пароль" required>
            </div>

            <div class="form-group">
                <button type="submit">Войти</button>
            </div>
            <div class="link">
                <a href="{{ route('login') }}">Уже зарегистрированы? </a>
                <a href="#">Политика конфеденциальности </a>
            </div>
        </form>
    </div>
</div>

@endsection