<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemControllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\informationController;
use App\Models\Item;

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

Route::get('/ProductDetail/{item:slug}', [ItemControllers::class, 'show'])->middleware('auth');

Route::get('/categories/{category:slug}', function(Category $category){
    return view('Category', [
        'title' => $category->name,
        'Items' => $category->items->load('category'),
        'category' => $category->name
    ]);
})->middleware('auth');



Route::get('/informations/settings', function() {
    return view('informations.accountSettingsDetail');
});

Route::get('/informations/status', function() {
    return view('informations.accountStatusDetail');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/informations/settings/{user:username}', [informationController::class, 'settings']);
Route::put('/informations/settings/{user:username}', [informationController::class, 'update']);
Route::put('/informations/settings/image/{user:username}', [informationController::class, 'updateImage']);
Route::get('/informations/history/{user:username}', [informationController::class, 'history']);



Route::get('/informations/status/balance/{user:username}', [informationController::class, 'status']);
Route::post('/informations/status/balance/{user:username}', [informationController::class, 'TopUp']);
Route::get('/informations/status/watchlists/{user:username}', [informationController::class, 'watchList']);


Route::put('/ProductDetail/{item:slug}', [ItemControllers::class, 'update']);
Route::put('/ProductDetail/buyNow/{item:slug}', [ItemControllers::class, 'buyNow']);


Route::get('/categorymenu', function(Category $category){
    return view('categoryMenu', [
        'title' => $category->name,
    ]);
})->middleware('auth');


Route::get('/account/{user:username}', function(){
    return view('account.index');
});


Route::get('/help/chat', function(){
    return view('help.chatWithUs');
});

Route::get('/help/faq', function(){
    return view('help.faq');
});