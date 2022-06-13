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

    // public function udpate(Request $request, Item $item){

    //     $validatedData = $request->validate(([
    //         'bid' => 'required'
    //     ]));

    //     if($request->bid < $item->bid){
    //         Item::
    //     }
    }
}

