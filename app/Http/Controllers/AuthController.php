<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat!');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/services');
        }

        return back()->withErrors(['email' => 'Login gagal']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
}
