<?php
require_once 'car.php';

$bandit = new Car('red', 5,'diesel');

$bandit->currentSpeed = 0;

$bandit->hasParkBreak = true;


var_dump($bandit->start());


try{

    $bandit->start();
    
    }catch(Exception $e){
    
       
        $bandit->hasParkBreak == false;
      
    
    }finally{
        echo 'ma voiture roule comme un donut';
    }