<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemControllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
        'items' => $category->items->load('category'),
        'category' => $category->name
    ]);
})->middleware('auth');

// Route::get('/login', function(){
//     return view('login');
// });

// Route::get('/register', function(){
//     return view('register');
// });


// Jadi nanti middleware bakal ada di antara /login lalu ke middleware, lalu baru ke [LoginController::class, 'index']
// hanya bisa diakses oleh user yg blm terautentikasi
// name('login') = memberi nama route dengan nama login, ini berkaitan ketika mengakses dashboard tanpa authenticate
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware(('guest'));;
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'create'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [ItemControllers::class, 'index'])->middleware('auth');



