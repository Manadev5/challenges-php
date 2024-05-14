<?php

require_once __DIR__.'/highWay.php';

final class MotorWay extends HighWay{

     public function addVehicle(Vehicle $car)
     {
         if($car instanceof Vehicle){
 
             $this->currentVehicles[] = $car;
             return $this->currentVehicles;
             }
     }
}