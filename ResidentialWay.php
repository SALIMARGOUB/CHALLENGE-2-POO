<?php

final class ResidentialWay extends HighWay

{
   
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;



    
    public function addVehicule(Vehicule $vehicule)
    {   if ($vehicule instanceof Vehicule){
          $this->currentVehicules[] = $vehicule;

        }
    }



}