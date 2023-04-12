<?php

final class MotorWay extends HighWay
{
    public function __construct() {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
        $this->setCurrentVehicules([]);
    }
    
    public function addVehicule(Vehicule $vehicule): void
    {
        if ($vehicule instanceof Car) {
            $this->currentVehicules[] = $vehicule;
        } else {
            echo "You cannot drive a " . get_class($vehicule) . " on a motorway.";
        }
    }

}