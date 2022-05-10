<?php

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



Route::get('/', function () {
    $shop_products = config("shop_products");
    return view('guest.home',["products" => $shop_products]);
})->name("home"); 

Route::get('/login', function () {
    return view('guest.login');
})->name("login");


Route::get('/basket', function () {
    return view('guest.basket');
})->name("basket");



