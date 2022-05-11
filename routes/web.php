<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetShop;
use App\Http\Controllers\classes\Product;
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

Route::get('/',[PetShop::class, 'createArray'],function () {
})->name("home");



Route::get('/login', function () {
    return view('guest.login');
})->name("login");


Route::get('/basket', function () {
    return view('guest.basket');
})->name("basket");



