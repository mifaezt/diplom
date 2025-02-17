<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    //Функция dd, выводим данные на экран, блокируем (Dump and die)
    public function store(Request $request ) {
        // Валидация при отправке формы
        $request->validate([
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:4'],
        ]);

        //создаем пользователя
       $user = User::create($request->all());

        // dd($request->all());
        return redirect()->route('login')->with('success', 'Регистрация прошла успешно');
    }

    //Вид регистрации
    public function create() {
        return view('user.create');
    }

    //Вид логина
    public function login() {
        return view('user.login'); 
    }

    //Вид онас
    public function about() {
        return view('about');
    }

}
