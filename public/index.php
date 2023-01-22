<?php 

use MyClass\OfficeReservation; 

require '../vendor/autoload.php';

$officeReservation = new OfficeReservation('Réservation pour le mois de janvier'); 
$officeReservation = new OfficeReservation('Réservation pour le mois de janvier'); 
$officeReservation = new OfficeReservation('Réservation pour le mois de janvier'); 
$officeReservation = new OfficeReservation('Réservation pour le mois de janvier'); 
var_dump($officeReservation::getCount());

?>