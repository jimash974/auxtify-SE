<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemControllers extends Controller
{
    public function index(){
        $request = Item::all();
        $date = Carbon::now();
        // dd($date);
        // dd($request[0]->End_date);
        $to = \Carbon\Carbon::parse($date);
        $from = \Carbon\Carbon::parse($request[0]->End_date);
        $hours = $to->diffInMinutes($from);
        // dd($hours);

        return view('dashboard', [
            "title" => "DASHBOARD",
            // "Items" => Item::all()
            "Items" => Item::with("category")->get(),
        ]);
    }

    //                  route model binding
    public function show(Item $item){
        // $request = Item::all();
        $date = Carbon::now();
        $to = \Carbon\Carbon::parse($date);
        // $from = \Carbon\Carbon::parse(->End_date);
        $from = \Carbon\Carbon::parse($item->End_date);
        $hours = $to->diffInSeconds($from, false);

        // dd($item->user->id);

        return view('productUnder', [
            "title" => "Product Detail",
            "item" => $item,
            "TimeLeft" => $hours
        ]);
    }

    public function update(Request $request, Item $item){

        // return auth()->user()->saldo;
        $id = Auth::id();

        $User = User::find($id);
        // return $User->saldo-$request->bid;
        
        // $validatedData = $request->validate(([
        //     'bid' => 'required'
        // ]));

        // dd($User->name);

        $this->validate($request, [
            'bid'     => 'required'
        ]);

        if($request->bid > $User->saldo){
            return redirect('/dashboard')->with('error', 'Saldo tak cukup');
        }

        if($request->bid > $item->bid){
            $item->update([
                'bid' => $request->bid,
                'user_id' => $User->id
            ]);
            $User->update([
                'saldo' => $User->saldo - $request->bid
            ]);
            return redirect('/dashboard')->with('success', 'Bid Berhasil ditambahkan!');
        }
        else{
            return redirect('/dashboard')->with('error', 'Bid Gagal ditambahkan!');
        }
    }

    public function buyNow(Request $request, Item $item){
        // dd($request->item);
        $id = Auth::id();
        $User = User::find($id);

        // $date = Carbon::now();
        // $currDate = \Carbon\Carbon::parse($date);
        // dd(Carbon::now());

        if($request->buyNow > $User->saldo){
            return redirect('/dashboard')->with('error', 'Saldo tak cukup');
        }
        else{
            $item->update([
                'user_id' => $User->id,
                'End_date' => Carbon::now()
            ]);
            $User->update([
                'saldo' => $User->saldo - $request->buyNow
            ]);

            return redirect('/dashboard')->with('success', 'Item Berhasil dibeli!');
        }


    }
}

