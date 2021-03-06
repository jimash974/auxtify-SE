<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Item;
use App\Models\User;
use App\Models\UserBid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class informationController extends Controller
{
    public function settings(User $user){

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
            'amount' => 'required|numeric|min:100000|max:10000000|gt:0',
        ]));

        $user->update([
            'saldo' => $user->saldo + $validatedData['amount']
        ]);

        return redirect('/dashboard')->with('success', 'Saldo Berhasil ditambahkan!');

    }

    public function update(Request $request, User $user){
        $request->title = strtolower($request->title);

        $user->update([
            'email' => ' ',
        ]);

        $validatedData =  $request->validate(([
            'name' => 'required|max:255|min:8',
            'email' => 'required|email:dns|unique:users',
        ]));
        

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        return Redirect::back()->with('message','Data update successful !');
    }

    public function watchList(User $user){
        
        $now = Carbon::now();
        $date = \Carbon\Carbon::parse($now);

        $itemActive = Item::where('End_date', '>', $date)->where('user_id', $user->id)->get();
        $watch = UserBid::with("item")->where('user_id', $user->id)->get();
  
        return view('informations.accountStatusWatchlists', [
            'itemActive' => $itemActive,
            'Watchs' => $watch
        ]);

    }

    public function history(Request $request, User $user){

        $date = Carbon::now();

        $item = Item::get();
        $item = Item::with("user")->where('user_id', $user->id)->where('End_date', '<', $date)->get();

        $watch = UserBid::with("item")->where('user_id', $user->id)->get();


        return view('history.index',[
            'Items' => $item,
        'Watchs' => $watch
        ]);
    }

    public function updateImage(Request $request, User $user){
        if($user->profile_picture){
            Storage::delete($user->profile_picture);
        }

        $user->update([
            'profile_picture' =>$request->file('image')->store('profile-picture')
        ]);
        

        return Redirect::back()->with('profileMessage','Image updated successfully !');
    }
}
