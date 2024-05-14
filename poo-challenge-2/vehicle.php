<?php
class Vehicle {
    private string $color;
    private string $sitNumber;
    public string $energyType;
    public int $currentSpeed;

    public function __construct($color,$sitNumber,$energyType)
    {
        $this->color = $color;
        $this->sitNumber = $sitNumber;
        $this->energyType = $energyType;
    }

    public function forward(){
        if($this->currentSpeed > 0){
           return $this->currentSpeed + 15;
        }else{
            return 'start before';
        }
    }

    public function break(){
        if($this->currentSpeed > 0 OR $this->currentSpeed < 0){
           return $this->currentSpeed == 0;
        }
    }

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


}