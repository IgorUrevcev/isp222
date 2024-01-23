<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UserController extends Controller
{
    public function create()
    {
        $title = 'Регистрация';
        return view('user.create', compact('title'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ]);

        session()->flash('success', 'Регистрация пройдена!');
        Auth::login($user);
        
        return redirect()->route('home');
        
    }

    public function LoginCreate()
    {
        $title = 'Авторизация';
        return view('user.login.create', compact('title'));
    }

    public function LoginStore(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if (Auth::attempt([
            'email' => $request->email,
            'password' =>$request->password,
        ])) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error', 'Некоректный Логин или Пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
