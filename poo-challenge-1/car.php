<?php

require_once __DIR__.'/../poo-challenge-2/vehicle.php';

class Car extends Vehicle{
    public int $wheelsAmount;
    public string $fuelType;

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