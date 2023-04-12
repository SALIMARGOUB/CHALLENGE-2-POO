<?php

final class MotorWay extends HighWay
{
    public function __construct() {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
        
    }
    
    public function addVehicule(Vehicule $vehicule): void
    {
        if ($vehicule instanceof Car) {
            $this->currentVehicules[] = $vehicule;
        } 
    }

}