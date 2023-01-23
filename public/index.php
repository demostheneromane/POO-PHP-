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

var_dump(ParentClass::getName(),ChildClass::getName());


?>