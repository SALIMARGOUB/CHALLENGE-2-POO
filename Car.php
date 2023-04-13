<?php


  require_once 'Vehicule.php';
  require_once 'Lightable.interface.php';
  

    class Car extends Vehicule implements Lightable {
       

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake=true;


    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);

    }

    public function start()
    {

        if ($this->hasParkBrake) {
            throw new Exception("vous devez désactiver le frein à main");

        }
        
        if($this->currentSpeed > 0){

         return "let's go";
        }

    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car

    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
        $this->energy = $energy;
        }
    
        return $this;

    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake): void

    {
        $this->hasParkBrake = $hasParkBrake;
    }



        public function switchOn(): bool {
            return true;
        }
    
        public function switchOff(): bool {
            return false;
        }
}            
   
