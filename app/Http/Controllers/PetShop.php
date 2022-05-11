<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Route;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\classes\Product;


class PetShop extends Controller

{
    public static function createArray() {

        
        $products = [
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
            new Product("food","crocchette","none",23),
        ];
        //$products = ["pro","sad"];
        return  view('guest.home',compact('products'));
    }
}


