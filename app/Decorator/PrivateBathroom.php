<?php

namespace App\Decorator;

class PrivateBathroom extends BookingOption
{
    public $price = 20;
    protected $description = 'Private bathroom';

    public function getCost()
    {
        return $this->booking->getCost() + $this->price;
    }
    public function getDescription()
    {
        return "{$this->booking->getDescription()}, {$this->description}";
    }
}
