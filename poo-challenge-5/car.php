<?php
require_once __DIR__.'/../poo-challenge-2/vehicle.php';
require_once __DIR__.'/lightableInterface.php';

class Car extends Vehicle implements LightableInterface{
    public int $wheelsAmount;
    public string $fuelType;
    public bool $hasParkBreak;


    public function start(){
        if($this->currentSpeed == 0){
          return  $this->currentSpeed ++;
        }
        if ($this->hasParkBreak == true) {
            throw new Exception("the hand break is on");
        }
    }

    public function setParkBreak(){

        if($this->hasParkBreak == false){
            $this->hasParkBreak == true;
        }else{
            $this->hasParkBreak == false;
        }
    }

    public function switchon()
    {
        return true;
    }

    public function switchoff()
    {
        return false;
    }
    /**
     * Get the value of wheelsAmount
     */ 
    public function getWheelsAmount()
    {
        return $this->wheelsAmount;
    }

    /**
     * Set the value of wheelsAmount
     *
     * @return  self
     */ 
    public function setWheelsAmount($wheelsAmount)
    {
        $this->wheelsAmount = $wheelsAmount;

        return $this;
    }
   
    /**
     * Get the value of fuelType
     */ 
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Set the value of fuelType
     *
     * @return  self
     */ 
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;

        return $this;
    }
}