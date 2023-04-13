<?php



require_once 'Vehicule.php';
require_once 'Lightable.interface.php';




    class Bicycle extends Vehicule implements Lightable {




        public function switchOn() {

          if($this->currentSpeed>10){

            return "la lumiere est allumée";
          }
        
           
          }
        
          public function switchOff() {

            if($this->currentSpeed<10){

              return "pédale plus vite";
            }
            
          }


        
    }





