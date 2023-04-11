<?php

 require_once 'Vehicule.php';

 
 class Truck extends Vehicule{

  protected int $storagecapacity;
  protected int $chargement=0;
  

  public function __construct(string $color, int $nbSeats, string $energy,int $storagecapacity)
    {
      parent::__construct($color,$nbSeats,$energy);
      $this->storagecapacity=$storagecapacity;
      
    }

    public function plein() {
        if ($this->chargement < $this->storagecapacity) {
            return "in filling";
        } else {
            return "full";
        }
    }
    public function setChargement($chargement) {
        $this->chargement = $chargement;
    }


     
 }
    






