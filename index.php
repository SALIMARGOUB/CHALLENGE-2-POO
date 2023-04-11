<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$bike = new Bicycle('blue',1);
$bike->setCurrentSpeed(20);


$bicycle = new Bicycle('blue', 1);

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('grey',1);



// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('pink',1);
$tornado->setCurrentSpeed(5);


// Instanciation d'un nouvel objet $BMW

$bmw= new car('blue',4,'essence') ;

$car = new Car('green', 4, 'electric');
// echo $car->forward();


$camion = new Truck("rouge", 2,"essence",100);
$camion->setChargement(100);

var_dump($camion);

echo $camion->plein();


// chargement camion 




// Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed(). ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();