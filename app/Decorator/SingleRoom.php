<?php

namespace App\Decorator;

class SingleRoom implements BookingInterface
{
    public $price = 30;
    public $description = 'Single Room';

    public function getCost()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
}
