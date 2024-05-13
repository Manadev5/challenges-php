<?php

require_once __DIR__.'/truck.php';

$homerTruck = new Truck('red', 2,'diesel',100);

$homerTruck->currentSpeed = 0;

$homerTruck->start();

var_dump($homerTruck->forward());

$homerTruck->addToCharge();

var_dump($homerTruck->isFull());





