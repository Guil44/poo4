<?php

namespace App;

final class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

    public function addvehicule($vehiculeSetByUser)
    {
        if
        (
            $vehiculeSetByUser instanceof Bike ||
            $vehiculeSetByUser instanceof Skateboard
        )
        {
            $this->currentVehicules[] = $vehiculeSetByUser;

        }else
            {
                echo 'Interdit aux voitures !';
            }
    }





}