<?php

abstract class HighWay{

  protected array $currentVehicules;
  protected int $nbLane;
  protected int $maxSpeed;

  abstract function addVehicule(Vehicule $vehicule);
 

    public function __construct() {


    }
        
    
    
 
 
     public function setCurrentVehicules(array $currentVehicules): void
    {
      $this->currentVehicules= $currentVehicules;
    }

     public function getCurrentVehicules():array{

        return $this->currentVehicules;
          
    }
     public function getnbLane(): int
    {
        return $this->nbLane;
    }

     public function setnbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

     public function getmaxSpedd(): int
    {
        return $this->maxSpeed;
    }

      public function setmaxSpeed(int $maxSpeed): void
    {
        $this->nbLane = $maxSpeed;
    }
    public function get_class(){



    }

}