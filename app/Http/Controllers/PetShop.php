<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Route;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\classes\Product;
use App\Http\Controllers\classes\CreditCard;
use App\Http\Controllers\classes\Customer;


class PetShop extends Controller

{
    public static function createProducts() {
        $products = [
            new Product("food","crocchette","https://picsum.photos/200",23,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem."),
            new Product("food","crocchette","https://picsum.photos/200",23,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem."),
            new Product("food","crocchette","https://picsum.photos/200",23,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem."),
            new Product("food","crocchette","https://picsum.photos/200",23,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem."),
            new Product("food","crocchette","https://picsum.photos/200",23,"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem."),
            new Product("food","crocchette","https://picsum.photos/200",23,"Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem"),
            new Product("food","crocchette","https://picsum.photos/200",23,"Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem"),
            new Product("food","crocchette","https://picsum.photos/200",23,"Ab quidem tempora vel. Cupiditate animi architecto expedita, incidunt eum voluptate quos dolorem"),
            new Product("food","crocchette","https://picsum.photos/200",23,"lore expedita, incidunt eum voluptate quos dolorem"),
            new Product("food","crocchette","https://baconmockup.com/100/100",23,"expedita, incidunt eum voluptate quos dolorem"),
        ];
        //$products = ["pro","sad"];
        return  view('guest.home',compact('products'));
    }

    public static function createOrder() {
        
        $customer = new Customer("Gigi","Rossi",10-10-1999,true, new CreditCard(123443214567,200,2024));     
        $product =  new Product("food","crocchette","https://picsum.photos/200",23,"lore expedita, incidunt eum voluptate quos dolorem");
        $order = $customer->makeOrder($product);

        return  view('guest.basket',compact('customer','product','order'));
    }
}


