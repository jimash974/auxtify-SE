<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemControllers extends Controller
{
    public function index(){
        return view('dashboard', [
            "title" => "DASHBOARD",
            "Items" => Item::all()
        ]);
    }

    //                  route model binding
    public function show(Item $item){
        return view('productUnder', [
            "title" => "Product Detail",
            "item" => $item
        ]);
    }
}
