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
            "TimeLeft" => $hours
        ]);
    }

    //                  route model binding
    public function show(Item $item){
        return view('productUnder', [
            "title" => "Product Detail",
            "item" => $item
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

        $this->validate($request, [
            'bid'     => 'required'
        ]);

        if($request->bid > $User->saldo){
            return redirect('/dashboard')->with('error', 'Saldo tak cukup');
        }

        if($request->bid > $item->bid){
            $item->update([
                'bid' => $request->bid
            ]);
            $User->update([
                'saldo' => $User->saldo - $request->bid
            ]);
            return redirect('/dashboard')->with('success', 'Bid Berhasil ditambahkan!');
        }
        else{
            return redirect('/dashboard')->with('error', 'Data Gagal ditambahkan!');
        }

    }
}

