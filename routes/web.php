<?php

use App\Http\Controllers\ItemControllers;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [ItemControllers::class, 'index']);

Route::get('/ProductDetail/{Item:slug}', [ItemControllers::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('Category', [
        'title' => $category->name,
        'items' => $category->items,
        'category' => $category->name
    ]);
});
