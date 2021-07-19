<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }
        return redirect('masuk');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => 'member',
            'email' => $request->email,
            'password' => $request->password,
            'remember_token' => Str::random(60),
        ]);
    }
}
