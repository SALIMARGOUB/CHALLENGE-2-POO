<?php

abstract class HighWay{
 public array $currentVehicules;
 public int $nbLane;
 public int $maxSpeed;

  abstract function addVehicule(Vehicule $vehicule);
 

    public function __construct(int $nbLane, int $maxSpeed) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
        $this->currentVehicules = [];
    }
    
    
 
 
  public function setcurrentVehicules(array $currentVehicules): void
  {
      $this->currentVehicules= $currentVehicules;
  }

  public function getcurrentVehicules():array{

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