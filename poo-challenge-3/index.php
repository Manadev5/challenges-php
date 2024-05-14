<?php
require_once __DIR__.'/../poo-challenge-1/car.php';
require_once __DIR__.'/highWay.php';
require_once __DIR__.'/motorWay.php';
require_once __DIR__.'/pedestrianWay.php';
require_once __DIR__.'/residentalWay.php';
require_once __DIR__.'/bike.php';

$ferrari = new Car('red', 3, 'electric');
$superBike = new Bike('bleu', 1, 'fuel');
$skateBig = new Skateboard('yellow', 1, 'fuel');

$roadBig = new MotorWay(4,130);
$cityRoad = new ResidentWay(2,50);
$smallRoad = new PedestrianWay(1,10);

var_dump($roadBig->addVehicle($ferrari));
var_dump($cityRoad->addVehicle($superBike));
var_dump($smallRoad->addVehicle($skateBig));
var_dump($cityRoad->addVehicle($ferrari));
