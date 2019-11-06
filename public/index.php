<?php

use App\Bike;

require_once '../vendor/autoload.php';

$lapierre = new App\Bike;
$bike2 = new App\Bike;

var_dump ($lapierre->switchOn());

var_dump($bike2->switchOff());




