<?php 

use MyClass\CoffeeMachine; 
use MyClass\PremiumCoffeeMachine; 
use MyClass\Peugeot;
use MyClass\Vehicule;
use MyClass\BasicPDF;
use MyClass\PDFDownloaderService; 
use MyClass\PremiumPDF; 
use MyClass\PDFDownloader;
use MyClass\ParentClass; 
use MyClass\ChildClass;
use MyClass\Coffeemake; 
use MyClass\IrishCoffee;
use MyClass\NewEspresso; 
use MyClass\MultiCoffeeMachine;
use Router\Router; 
use Controllers\HomeController;

require '../vendor/autoload.php';

//$coffeeMachine = new CoffeeMachine(30);
//$premiumCoffeeMachine = new PremiumCoffeeMachine(20);
//$coffeeMachine->select('espresso');
//$premiumCoffeeMachine->select('vanilla');
//$peugeot = new Peugeot('peugeot'); 
//$vehicule = new Vehicule('Toyota'); ***Cannot instantiate abstract class MyClass\Vehicule***
//var_dump($vehicule->marque());
//var_dump($peugeot->roule(),$peugeot->marque());
//$basicPDF = new BasicPDF();
//$pdfdownloadservice = new PDFDownloaderService();
//$premiumPdf = new PremiumPDF(); 
//var_dump($basicPDF->downloadPDF(),$basicPDF->downloadHTML());
//var_dump($pdfdownloadservice->downloadPDF($basicPDF));
//var_dump($pdfdownloadservice->downloadPDF($premiumPdf));

//$parentClass = new ParentClass(); 
//$childClass = new ChildClass(); 

//var_dump($parentClass->getName(),$childClass->getName());

//var_dump(ParentClass::getName(),ChildClass::getName());

/*$newEspresso = new NewEspresso(); 
$irishCoffee= new IrishCoffee();
$multicoffee = new MultiCoffeeMachine();*/ 

/*var_dump(
    $newEspresso->makeEspresso(), 
    $irishCoffee->makeIrishCoffee(),
    $newEspresso->makeCoffee(), 
    $irishCoffee->makeCoffee()

); */ 

/*var_dump(
     $multicoffee->makeEspresso(), 
     $multicoffee->makeIrishCoffee(), 
     $multicoffee->makeCoffee()
);*/ 

$route = new Router(); 
$HomeController = new HomeController();
$route->register('/POO-PHP-/public/index.php',[$HomeController,'home']);

//$route->register('/contact',);

echo $route->resolve($_SERVER['REQUEST_URI']); 


?>