<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        if(auth()->check()) {
            return redirect('/dashboard');
        } else {
            return view('login.index', [
                'title' => 'Login'
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        // validasi email dan password nya
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5'
        ]);

        // jika data nya benar, maka lakukan session regenerate
        // regenerate session tujuanny utk menghindari tecnich hackin yakni session fixation
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended(('/dashboard'));
        }

        // kalau data kredensial salah, maka balik lagi, dengan memberi pesan error
        return back()->with('loginError', 'Login Failed!!');
      
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard');
    }
}
