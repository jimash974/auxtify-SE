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
        // return request()->all();
        // return $request->all();

        // $request->title = strtolower($request->title);
         $request['title'] = strtolower($request->title);
        //  dd($request->title);

        $validatedData = $request->validate(([
            'name' => 'required|max:255',
            // sebenerny sama aj kek di atas, hanya beda format aja, dmn format yg atas pake pipe kalau yg bawah pake array
            'username' => ['required', 'min:8', 'max:20', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:100',
            // 'title' => 'required'
        ]));
        // Rule::requiredIf($request->local_or_expat == 'expat')
        
        // Kalau validasi di atas lolos, maka yg dibawah ini akan dijalankan
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['saldo'] = 500000;
        // return $validatedData;

        // dd($validatedData['username']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Resgistration Successfull !!, please loginnnnnnn !!!!!!');

    }
}