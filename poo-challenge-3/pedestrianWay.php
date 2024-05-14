<?php

require_once __DIR__.'/highWay.php';
require_once __DIR__.'/bike.php';

final class PedestrianWay extends HighWay{
    public function addVehicle(Vehicle $car)
    {
        if($car instanceof Bike || $car instanceof Skateboard){

            $this->currentVehicles[] = $car;
            return $this->currentVehicles;
            }
    }
}