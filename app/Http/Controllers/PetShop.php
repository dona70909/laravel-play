<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;

use app\Http\Controllers\classes;
use app\Http\Controllers\classes\CreditCard;
use app\Http\Controllers\classes\Customer;
use app\Http\Controllers\classes\Product;
use app\Http\Controllers\classes\Product_Category;
use app\Http\Controllers\classes\Order;


class PetShop 
{
    public function createArray() {

        $products = [
            new Product("Food","crocchette","none",10),
            new Product("Food","pasta","none",10),
            new Product("Food","tonno","none",10),
            new Product("Food","carne di vitello","none",10),
            new Product("Food","carne di maiale","none",10),
        ];

        return $products;
    }
}
