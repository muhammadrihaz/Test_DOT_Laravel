<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('auth/login-form');
    }

    public function authenticate(Request $request)
    {
        // Melakukan validasi email dan password.
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 
        // Mengecek apakah user ceklis kolom remember me.
        $remember_me = $request->has('remember_me') ? true : false;
 
        if (Auth::attempt($credentials,$remember_me)) {
            $request->session()->regenerate(); 
            return redirect()->route('dashboard')->with('success', 'Berhasil Melakukan Login !');
        } // Jika Email dan password benar
 
        return back()->with('toast_error', 'Email / Password salah !')->onlyInput('email');
        // mengembalikan jika email dan password salah.
    }

    public function logout (Request $request){

        Auth::logout();
        //melakukan request logout
        $request->session()->invalidate();
        // melakukan regenerate Token login sebelumnya
        $request->session()->regenerateToken();
        // mengredirect ke route form login
        return redirect()->route('login');
    }
}
