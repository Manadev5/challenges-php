<?php
require_once __DIR__.'/../poo-challenge-2/vehicle.php';
require_once __DIR__.'/lightableInterface.php';

class Bike extends Vehicle implements LightableInterface{
    public function switchon()
    {
        if($this->currentSpeed >= 10){
            return true;
        }
        
    }

    public function switchoff()
    {
        return false;
    }
}