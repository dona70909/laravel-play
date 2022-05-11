<?php 
    include 'autoload.php';

    $croccantini = new Product("Food","Croccantini di manzo","none",25);
    $card = new CreditCard(123443214567,200,2024);
    $customer_1 = new Customer("gigi","bho",10-10-1999,true,$card);
    $customer_1->makeOrder($croccantini);
?>

