<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle implements LightableInterface
{
    public function changeWheel()
    {
        return "change the two wheels of a Bicycle";
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}