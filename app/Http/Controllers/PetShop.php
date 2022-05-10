<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request as Controller;
use  app\classes\CreditCard;
use app\classes\Customer;
use app\classes\Product;
use app\classes\Product_Category;
use app\classes\Order;

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
