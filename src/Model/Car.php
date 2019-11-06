<?php

namespace App;


class Car extends Vehicule implements LightableInterface
{
    public function switchOn($powerOn)
    {
        return true;
    }

    public function switchOff($powerOff)
    {
        return false;
    }
}