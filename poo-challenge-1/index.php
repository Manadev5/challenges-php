<?php
require_once 'car.php';

$bandit = new Car('red', 5,'diesel');

$bandit->currentSpeed = 0;

$bandit->start();

var_dump($bandit->forward());