<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\User;
use App\Models\UserBid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemControllers extends Controller
{
    public function index(){

        $item = Item::with("category")->latest();

        if(request('search')){
            $item->where('judul', 'like', '%' . request('search') . '%');
        }

        return view('dashboard', [
            "title" => "DASHBOARD", 
            "Items" => $item->get()
        ]);
    }

    
    public function show(Item $item){
        $date = Carbon::now();
        $to = \Carbon\Carbon::parse($date);
        $from = \Carbon\Carbon::parse($item->End_date);
        $hours = $to->diffInSeconds($from, false);

        return view('productUnder', [
            "title" => "Product Detail",
            "item" => $item,
            "TimeLeft" => $hours
        ]);
    }

    public function update(Request $request, Item $item){

        $id = Auth::id();

        $User = User::find($id);

        $oldUser = User::find($item->user_id);
        

        $this->validate($request, [
            'bid'     => 'required'
        ]);

        if($request->bid > $User->saldo){
            return redirect('/dashboard')->with('error', 'Saldo tak cukup');
        }

        if($request->bid > $item->bid){
            $oldUser->update([
                'saldo' => $oldUser->saldo + $item->bid
            ]);
            $item->update([
                'bid' => $request->bid,
                'user_id' => $User->id
            ]);
            $User->update([
                'saldo' => $User->saldo - $request->bid
            ]);


            $userBid = UserBid::create([
                'user_id' => $User->id,
                'item_id' => $item->id
            ]);

            return redirect('/dashboard')->with('success', 'Bid Berhasil ditambahkan!');
        }
        else{
            return redirect('/dashboard')->with('error', 'Bid Gagal ditambahkan!');
        }
    }

    public function buyNow(Item $item){
        $id = Auth::id();
        $User = User::find($id);

        if($item->buyNow > $User->saldo){
            return redirect('/dashboard')->with('error', 'Saldo tak cukup');
        }
        else{
            $item->update([
                'user_id' => $User->id,
                'End_date' => Carbon::now(),
                'bid' => $item->buyNow
            ]);
            $User->update([
                'saldo' => $User->saldo - $item->buyNow
            ]);

            return redirect('/dashboard')->with('success', 'Item Berhasil dibeli!');
        }


    }
}

