<?php

final class PedestrianWay extends HighWay {

  
    protected array $currentVehicules = [];
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;


    
     
    
    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bicycle || $vehicule instanceof Skateboard) {
            $this->currentVehicules[] = $vehicule;
            return "votre vehicule est autorisé  circuler  ";
        } 
        return "votre vehicule est inertdit sur cette voie seul les velos et les skateboard sont autorisée";
          
    }


}