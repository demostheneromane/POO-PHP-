<?php 

use MyClass\CoffeeMachine; 
use MyClass\PremiumCoffeeMachine; 
use MyClass\Peugeot;
use MyClass\Vehicule;


require '../vendor/autoload.php';

//$coffeeMachine = new CoffeeMachine(30);
//$premiumCoffeeMachine = new PremiumCoffeeMachine(20);

//$coffeeMachine->select('espresso');
//$premiumCoffeeMachine->select('vanilla');
$peugeot = new Peugeot('peugeot'); 
//$vehicule = new Vehicule('Toyota'); ***Cannot instantiate abstract class MyClass\Vehicule***
//var_dump($vehicule->marque());

//var_dump($peugeot->roule(),$peugeot->marque());

?>