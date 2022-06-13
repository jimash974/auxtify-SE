<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemControllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'items' => $category->items->load('category'),
        'category' => $category->name
    ]);
});

// Route::get('/login', function(){
//     return view('login');
// });

// Route::get('/register', function(){
//     return view('register');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);



