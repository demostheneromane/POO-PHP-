<?php 

use MyClass\CoffeeMachine; 
use MyClass\PremiumCoffeeMachine; 


require '../vendor/autoload.php';

//$coffeeMachine = new CoffeeMachine(30);
$premiumCoffeeMachine = new PremiumCoffeeMachine(20);

//$coffeeMachine->select('espresso');
$premiumCoffeeMachine->select('vanilla');

?>