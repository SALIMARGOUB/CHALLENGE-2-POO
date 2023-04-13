<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';
require_once 'PedestrianWay.php';
require_once 'Lightable.interface.php';

// //test lumiere velo
// $bike = new Bicycle('blue',1);
// $bike->setCurrentSpeed(9);
// echo $bike->switchON().' '.'salim'.' '.$bike->switchOff();

// //test lumiere voiture
// $car = new Car('blue',1,'electric');
// echo $car->switchOff();
// echo $car->switchON();


// // Instanciation d'un nouvel objet $rockrider
// $rockrider = new Bicycle('grey',1);
// $bicycle = new Bicycle('blue', 1);

// // Moving bike
// echo '<br> Vitesse du velo : ' . $velo->getcurrentSpeed(). ' km/h' . '<br>';
// echo $velo->brake();
// echo '<br> Vitesse du velo : ' . $velo->getcurrentSpeed() . ' km/h' . '<br>';
// echo $velo->brake();

// // Instanciation d'un nouvel objet car

// $bmw= new car('blue',4,'essence') ;
// $tesla = new Car('black', 4,'electric');
// $ferrari = new Car('red', 2,'essence');
// $vehicle = new Vehicule('pink', 4,'essence');


// // utilisation du frein a main,Tente de démarrer la voiture
//$car = new Car('green', 4, 'electric');
// $car->setCurrentSpeed(2);
// $car->setParkBrake(false);
// try {
//     $car->start();
// } catch(Exception $e){

//     // code to manage exceptions
//     echo "Exception: ". $e->getMessage() . "n";
// } finally {
//     echo "Ma voiture roule comme un donut!\n";
// }


// // Moving car

// echo '<br> Vitesse de la voiture: ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();
// echo '<br> Vitesse de la voiture : ' . $car->getcurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();

//var_dump(Car::ALLOWED_ENERGIES);
/// echo $car->forward();

// // chargement camion et Moving bike
// $camion = new Truck("rouge", 2,"essence",100);
// $camion->setChargement(100);
// echo  'the truck is'.' '.$camion->plein().' '.$camion->forward();
// echo '<br> Vitesse du camion : ' . $camion->getcurrentSpeed(). ' km/h' . '<br>';
// echo $camion->brake();
// echo '<br> Vitesse du camion : ' . $camion->getcurrentSpeed() . ' km/h' . '<br>';
// echo $camion->brake();

// // Création d'une autoroute et Création de plusieurs véhicules
$car1 = new Car('black',4,'electric');
//$bike1 = new Bicycle('green',1);
// $skateboard1 = new Skateboard('red',1);
// $skateboard2 = new Skateboard('pink',1);

// // Ajout d'une voiture à l'autoroute
$curb= new PedestrianWay();
echo $curb->addVehicule($car1); 
// // Affichage des véhicules actuellement sur l'autoroute










