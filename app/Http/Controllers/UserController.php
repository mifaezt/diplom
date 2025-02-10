<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    //Функция dd, выводим данные на экран, блокируем (Dump and die)
    public function store(Request $request ) {
        dd($request->all());
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
