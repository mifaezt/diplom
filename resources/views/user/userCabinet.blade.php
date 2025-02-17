<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Личный кабинет')

@section('content')


<div class="container">
    <div class="form-container">
        <h2>Личный кабинет</h2>
        <h3> Добро пожаловать {{auth()->user()->name}}</h3>
        <a href="{{route('logout')}}">Выйти</a>
       
    </div>
</div>

@endsection