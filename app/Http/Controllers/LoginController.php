<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->level == "admin") {
                return redirect('/dashboard');
            } else if (Auth::user()->level == "member") {
                return redirect('/home');
            }
            return redirect('masuk');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registrasi(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'level' => 'member',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        DB::table('member')->insert([
            'nama_member' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return view('member/v_member_home');
    }
}
