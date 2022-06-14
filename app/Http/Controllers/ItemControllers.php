<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

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

        // return auth()->user()->username;

        
        // $validatedData = $request->validate(([
        //     'bid' => 'required'
        // ]));

        $this->validate($request, [
            'bid'     => 'required'
        ]);


        if($request->bid > $item->bid){
            $item->update([
                'bid' => $request->bid
            ]);
            return redirect('/dashboard')->with('success', 'Bid Berhasil ditambahkan!');
        }
        else{
            return redirect('/dashboard')->with('error', 'Data Gagal ditambahkan!');
        }

        // return redirect('/login')->with('success', 'Resgistration Successfull !!, please loginnnnnnn !!!!!!');

    }
}

