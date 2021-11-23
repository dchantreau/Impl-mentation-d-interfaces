<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$tesla = new Car('black', 4);
$myBicycle = new Car('red', 2);
$townBicycle = new Bicycle('yellow', 40);

echo $tesla->switchOn() . " The light is on ";
echo $myBicycle->switchOn() . " The light is on ";
echo $townBicycle->switchOff() . " The light is off ";

?>
