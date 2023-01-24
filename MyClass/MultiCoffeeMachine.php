<?php

namespace MyClass;
use MyClass\Traits\IrishCoffeeTraits; 
use MyClass\Traits\NewEspressoTraits; 

class MultiCoffeeMachine extends CoffeeMaker 
{
    use NewEspressoTraits;
    use IrishCoffeeTraits;

   
}
