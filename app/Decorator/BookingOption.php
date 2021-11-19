<?php

namespace App\Decorator;

abstract class BookingOption implements BookingInterface
{
    protected $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    abstract public function getCost();

    abstract public function getDescription();
}
