<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class informationController extends Controller
{
    public function settings(User $user){

        // return view('informations.accountSettingsDetail');

        return view('informations.accountSettingsDetail',[
            "title" => "Settings",
            "user" => $user
        ]);
    }
}
