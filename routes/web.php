<?php


use App\Http\Controllers\PetShop;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\classes\Product;
//use Illuminate\Support\Facades\Auth;



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
/* esegue il metodo createProducts inside the Classe PetShop e 
questo metodo oltre a "ritornate" la view porta con se anche i dati  */
Route::get('/',[PetShop::class, 'createProducts'],function () {
})->name("home");



Route::get('/login', function () {
    return view('guest.login');
})->name("login");

/* esegue il metodo createOrder inside the Classe PetShop e 
questo metodo oltre a "ritornate" la view porta con se anche i dati  */
Route::get('/basket',[PetShop::class, 'createOrder'], function () {
})->name("basket");



