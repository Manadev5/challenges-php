<?php
require_once __DIR__.'/vehicle.php';

class Truck extends Vehicle{
    private int $stockage;
    private int $charge = 0;

    public function __construct($color,$sitNumber,$energyType,$stockage)
    {
        parent:: __construct($color,$sitNumber,$energyType);
    
        $this->stockage= $stockage;
    
    }

    public function addToCharge(){
        return $this->charge = 100;
    }

    public function isFull(){
        if($this->charge == 0){
            return 'in filling';
        }elseif($this->charge == 100){
            return 'full';
        }
    }
}