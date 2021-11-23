<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if(currentSpeed > 10){
        return true . " The light in on ";
        }else return false . " The light in off ";
    }

    public function switchOff(): bool
    {
        return false . " The light in off ";
    }
}
