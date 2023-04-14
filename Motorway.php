<?php

final class MotorWay extends HighWay
{
   
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;
    
    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Car) {
            $this->currentVehicules[] = $vehicule;
        } return "votre vehicule est autorisé  circuler";
     
    return "votre vehicule est inertdit sur cette voie";
    }     

}