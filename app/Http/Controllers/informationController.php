<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class informationController extends Controller
{
    public function settings(User $user){

        // return view('informations.accountSettingsDetail');

        return view('informations.accountSettingsDetail',[
            "title" => "Settings",
            "user" => $user
        ]);
    }

    public function status(User $user){
        // return auth()->user;
        return view('informations.accountStatusDetail', [
            'title' => 'Status',
            'user' => $user
        ]);    
    }

    public function TopUp(Request $request, User $user){  

        $validatedData = $request->validate(([
            'amount' => 'required|min:6',
        ]));

        $user->update([
            'saldo' => $user->saldo + $validatedData['amount']
        ]);

        return redirect('/dashboard')->with('success', 'Bid Berhasil ditambahkan!');

    }

    public function update(Request $request, User $user){

        $request->title = strtolower($request->title);
        // dd($request->title);

        $user->update([
            'email' => ' ',
        ]);

        // dd()

        $validatedData =  $request->validate(([
            'name' => 'required|max:255|min:8',
            'email' => 'required|email:dns|unique:users',
        ]));
        

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        return Redirect::back()->with('message','Data update successful !');
        ;
    }

}
