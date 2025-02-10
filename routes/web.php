<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Маршрут показ формы регистрации
Route::get("register", [App\Http\Controllers\UserController::class, 'create'])->name('register');

// Маршрут для приема данных(этот метод будет обрабатывать данные, отправленные из формы регистрации)
Route::post("register", [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

// Маршрут показ формы входа
Route::get("login", [App\Http\Controllers\UserController::class, 'login'])->name('login');

// Маршрут показ формы онас
Route::get("about", [App\Http\Controllers\UserController::class, 'about'])->name('about');