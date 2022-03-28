<?php

require_once 'Bicycle.php';
require_once 'Car.php'; 

// Bicycle code
$bike = new Bicycle("blue", 4);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

//Car code
$car = new Car ("red", 5, "electricity");
$car->getEnergyLevel();
$car->getNbWheels();
var_dump($car); 

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();





