<?php

namespace App;


class Bike extends Vehicule implements LightableInterface
{
    public function currentSpeed()
    {
        return 30;
    }
    public function switchOn()
    {
        if ($this->currentSpeed() > 10)
        {
            return true;
        }
            
    }
    public function switchOff()
    {
        return false;
    }
}
