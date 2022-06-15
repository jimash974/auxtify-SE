<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ItemControllers extends Controller
{
    public function index(){
        return view('dashboard', [
            "title" => "DASHBOARD",
            // "Items" => Item::all()
            "Items" => Item::with("category")->get()
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

