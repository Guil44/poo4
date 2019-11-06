<?php

namespace App;

abstract class HighWay{
    private $currentVehicules=[];
    private $nbLane;
    private $maxSpeed;


    public function getcurrentVehicules(){
        return $this->currentVehicules;

    }

    public function setcurrentVehicules($currentVehiculesByme){
        $this->currentVehicules = $currentVehiculesByme;

    }

    public function getnbLane(){
        return $this->nbLane;

    }

    public function setnbLane($nbLaneByme){
        $this->nbLane = $nbLaneByme;

    }

    public function getmaxSpeed(){
        return $this->maxSpeed;


    }
    public function setmaxSpeed($maxSpeedByme){
        $this->maxSpeed = $maxSpeedByme;
    }
    abstract function addvehicule($vehiculesetByUser);
}

