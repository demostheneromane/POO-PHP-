<?php

namespace MyClass\Paypal;
use DateTime; //global 

class Payment 
{
  
   public function __construct()
   {
    var_dump( new DateTime());
    var_dump( new \User()); // global
   }
}

?>