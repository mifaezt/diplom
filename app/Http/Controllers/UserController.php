<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        // Создаем событие регистрации
       event(new Registered($user));
        // Логиним юзера
        Auth::login($user);
        // dd($request->all());
        return redirect()->route('verification.notice')->with('success', 'Регистрация прошла успешно');
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

    //Вид кабинет 
    public function userCabinet() {
        return view('user.userCabinet');
    }

    // логаут
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function loginAuth(Request $request) {
                // Валидация 
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required',],
                    ]);
                //    Запуск сессии при успшной аут
                if (Auth::attempt($credentials,$request->boolean('remember') )) {
                    $request->session()->regenerate();
                    return redirect()->intended('userCabinet')->with('success', 'Добро пожаловать, ' . Auth::user()->name . '!');
                }

                 // Проверка
                return back()->withErrors([
                    'email' => 'Неверный логин или пароль',
                ]);

        // dump($request->boolean('remember'));
        // dd($request->all());
    }

}
