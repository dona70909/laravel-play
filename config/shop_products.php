<?php 

    /*   use app\classes\CreditCard;
    use app\classes\Order;
    use app\Classes\Product;
    use app\Classes\Product_Category; */

    include '../app/Http/Controllers/includes/autoload.php';
    

    return [

        new Product("Food","crocchette","none",10),
        new Product("Food","pasta","none",10),
        new Product("Food","tonno","none",10),
        new Product("Food","carne di vitello","none",10),
        new Product("Food","carne di maiale","none",10),
    ]
    
?>