<?php

namespace App\Factory;

class CarFactory
{
    public static function make(string $type, int $doors, string $color)
    {
        if ($type === 'Audi') {
            return new Audi($doors, $color);
        } else if ($type === 'Tesla') {
            return new Tesla($doors, $color);
        } else {
            throw new CarException('This model of car does not exist');
        }
    }
}
