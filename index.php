<?php 

require_once('./Class/Cart.php'); 

$cart = new Cart(0,100); 
$cart->setTotalPrice(50);
$cart->discount(5);

var_dump($cart->getTotalPrice());