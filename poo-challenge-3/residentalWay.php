<?php

require_once __DIR__.'/highWay.php';
require_once __DIR__.'/../poo-challenge-1/car.php';

final class ResidentWay extends HighWay{
    public function addVehicle(Vehicle $car)
    {
        if($car instanceof Car ){

            $this->currentVehicles[] = $car;
            return $this->currentVehicles;
            }
    }
}