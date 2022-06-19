<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Session\Middleware\StartSession;
use DB;

// use Illuminate\Session\Middleware\StartSession::class;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

         $request['title'] = strtolower($request->title);

        $validatedData = $request->validate(([
            'name' => 'required|max:255',
            'username' => ['required', 'min:8', 'max:20', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:100',
        ]));
        
        // Kalau validasi di atas lolos, maka yg dibawah ini akan dijalankan
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['saldo'] = 500000;

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfull!');

    }
}