<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthorizeRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public  function auth(){
        return view('auth.login');
    }


    public  function register(){
        return view('auth.register');
    }


    public  function login(AuthorizeRequest $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt(($credentials))){
            return redirect()->route('index')->with('status', 'Вы успешно зашли на аккаунт');
        }

        return redirect()->route('auth.login')->with('status', 'Выши данные не верны');
    }



    public  function create(AuthorizeRequest $request)
    {
        if ($request->password == $request->confirm_password) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)]);


            return redirect()->route('auth')->with('status', 'Вы успешно зарегестрировались');
        }

        return redirect()->route('register')->with('status', 'Ваш пароль не совпадает');

    }




    public function logout(){
        Auth::logout();
        return redirect()->route('index')->with('status', 'Вы успешно вышли');
    }





}
