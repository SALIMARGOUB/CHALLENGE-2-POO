<?php

class ElectricBike extends Vehicule implements RechargeableInterface






{
    public function charge(int $percentage): int
    {
        // you must implement this method
    }

    public function unLoad(int $percentage): int
    {
        // you must implement this method
    }
}