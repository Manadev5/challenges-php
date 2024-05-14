<?php

class ConvenrtionDistance{

    static function kmOnMiles($number){
        return $number * 1.609344;

    }

    static function milesOnKm($number){
        return $number * 0.621371;

    }
}