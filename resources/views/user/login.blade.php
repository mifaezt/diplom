<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Логин')

@section('content')


<div class="container">
    <div class="form-container">
        <h2>Вход</h2>
        <form action="{{route("login.auth")}}" method="post">
            @csrf
            <div class="form-group">
                <input id="email"  name="email"  type="email" placeholder="Почта" required>
            </div>
            <div class="form-group">
                <input id="password" name="password" type="password" placeholder="Пароль" required>
            </div>
            <div class="form-group">
                <button type="submit">Войти</button>
            </div>


                <label for="remember">Запомнить пароль</label>
                <input name="remember" id="remember" type="checkbox">

            <div class="link">
                <p>Нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
                <a href="{{ route('password.request') }}" >Забыл?</a>
            </div>
        </form>
    </div>
</div>

@endsection