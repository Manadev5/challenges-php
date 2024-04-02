<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

$stevensonWeapon = '???';


switch($opponentWeapon){
    case 0 :
    
    case 'whip' :
        $stevensonWeapon = 'fists';
        break;
    case 'gun' :
        $stevensonWeapon = 'whip';
        break;
    case 'fists' :
        $stevensonWeapon ='gun';
        break;
}

echo $opponentWeapon . ' ' . $stevensonWeapon;