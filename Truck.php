<?php

 require_once 'Vehicule.php';

 
 class Truck extends Vehicule{

  protected int $storagecapacity;
  protected int $chargement=0;
  private string $energy;

  public function __construct(string $color, int $nbSeats, string $energy,int $storagecapacity)
    {
      parent::__construct($color,$nbSeats);
      $this->storagecapacity=$storagecapacity;
      $this->energy=$energy;
      
    }

    public function Full() {
        if ($this->chargement < $this->storagecapacity) {
            return "in filling";
        } else {
            return "full";
        }
    }
    public function setChargement($chargement) {
        $this->chargement = $chargement;
    }
    
    public function getStorageCapacity():int {
        return $this->storagecapacity;
    }
    public function setStorageCapacity(int $storagecapacity):void{

         $this->storagecapacity=$storagecapacity;
    }
     
 }
    






