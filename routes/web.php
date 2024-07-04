<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Dashboard
Route::get('/', function () {
    return view('pages.auth.login');
});
Route::middleware(['auth'])->group(function(){
    Route::get('home', function() {
        return view('pages.dashboard', ['type_menu' => 'dashboard']);
    })->name('home');
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});
// Route::get('/login', function () {
//     return view('pages.auth.login', ['type_menu' => 'auth'] );
// });
