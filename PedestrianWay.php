<?php

final class PedestrianWay extends HighWay {

    public function __construct() {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
        $this->setCurrentVehicules([]);
    }

    public function addVehicule(Vehicule $vehicule): void
    {
        if ($vehicule instanceof Bicycle || $vehicule instanceof Skateboard) {
            $this->currentVehicules[] = $vehicule;
        } else {
            echo "You cannot drive a " . get_class($vehicule) . " on a pedestrian way.";
        }
    }


}