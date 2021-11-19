<?php

namespace App\Decorator;

class DoubleRoom extends BookingOption
{
    public $price = 20;
    protected $description = 'Double room update';

    public function getCost()
    {
        return $this->booking->getCost() + $this->price;
    }
    public function getDescription()
    {
        return "{$this->booking->getDescription()}, {$this->description}";
    }
}
