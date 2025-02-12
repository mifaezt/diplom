<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Логин')

@section('content')


<div class="container">
    <div class="form-container">
        <h2>Вход</h2>
        <form>
            <div class="form-group">
                <input type="email" placeholder="Почта" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <button type="submit">Войти</button>
            </div>
            <div class="link">
                <p>Нет аккаунта? <a href="#">Зарегистрироваться</a></p>
            </div>
        </form>
    </div>
</div>

@endsection