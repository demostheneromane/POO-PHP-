<?php

namespace MyClass; 

abstract class CoffeeMaker
{
   public function makeCoffee()
   {
       return static::class . ' fait un café ';
   }
}