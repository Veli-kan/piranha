<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $user = User::where([['login', $request->login], ['password', $request->pd]])->first();
        if (is_null($user)){
            return "Неверный логин или пароль";
        }
        Auth::login ($user);
        return back()->withInput();
    }
    public function logout()
    {
        Auth::logout();
        return back()->withInput();
    }

    public function reg(Request $request)
    {
        $user = User::where('email_address', $request->email)->get();
        if (is_null($user)){
            return "Пользователь с таким E-mail уже существует";
        }

        $user = User::create([
            'login'=>$request->login,
            'email_address'=>$request->email,
            'password'=>$request->passd,
            'status'=> 1,
        ]);
        if (is_null($user)) {
            return "Ошибка";
        }
        return "Success";
    }
}
