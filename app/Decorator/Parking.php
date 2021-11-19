<?php

namespace App\Decorator;

class Parking extends BookingOption
{
    public $price = 5;
    protected $description = 'Parking';

    public function getCost()
    {
        return $this->booking->getCost() + $this->price;
    }
    public function getDescription()
    {
        return "{$this->booking->getDescription()}, {$this->description}";
    }
}
