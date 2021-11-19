<?php

namespace App\Decorator;

class Kitchen extends BookingOption
{
    public $price = 10;
    protected $description = 'Kitchen';

    public function getCost()
    {
        return $this->booking->getCost() + $this->price;
    }
    public function getDescription()
    {
        return "{$this->booking->getDescription()}, {$this->description}";
    }
}
