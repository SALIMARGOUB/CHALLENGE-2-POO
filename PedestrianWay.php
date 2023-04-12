<?php

final class PedestrianWay extends HighWay {

    public function __construct() {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
     
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        if ($vehicule instanceof Bicycle || $vehicule instanceof Skateboard) {
            $this->currentVehicules[] = $vehicule;
        } 
        
    }


}