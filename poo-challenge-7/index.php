<?php

require_once __DIR__.'/personne.php';

$frank = new Personne;

$frank->name = 'frank';
$frank->surname = 'sugar';
$frank->age = 18;
$frank->adress = '12 rue fontaine, Lille';
$frank->birthdayYear = 2006;

var_dump($frank->infos());
var_dump($frank->calculateAge());
var_dump($frank->changeAdress('18 rue de verlain, Lille'));