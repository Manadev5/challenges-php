<?php

class Car{
    public int $wheelsAmount;
    public int $currentSpeed;
    private string $color;
    private string $sitNumber;
    public string $energyType;
    public string $fuelType;

    public function __construct($color,$sitNumber,$energyType)
    {
        $this->color = $color;
        $this->sitNumber = $sitNumber;
        $this->energyType = $energyType;
    }

    public function start(){
        if($this->currentSpeed == 0){
          return  $this->currentSpeed + 1;
        }
    }

    public function forward(){
        if($this->currentSpeed > 0){
           return $this->currentSpeed + 15;
        }
    }

    public function break(){
        if($this->currentSpeed > 0 OR $this->currentSpeed < 0){
           return $this->currentSpeed == 0;
        }
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
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of sitNumber
     */ 
    public function getSitNumber()
    {
        return $this->sitNumber;
    }

    /**
     * Set the value of sitNumber
     *
     * @return  self
     */ 
    public function setSitNumber($sitNumber)
    {
        $this->sitNumber = $sitNumber;

        return $this;
    }

    /**
     * Get the value of energyType
     */ 
    public function getEnergyType()
    {
        return $this->energyType;
    }

    /**
     * Set the value of energyType
     *
     * @return  self
     */ 
    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;

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