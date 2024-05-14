<?php

require_once __DIR__.'/bike.php';
require_once __DIR__.'/car.php';
require_once __DIR__.'/lightableInterface.php';

$ferrari = new Car('red', 3, 'electric');
$superBike = new Bike('bleu', 1, 'fuel');

var_dump($ferrari->switchon());

$superBike->currentSpeed = 12;


var_dump($superBike->switchon());