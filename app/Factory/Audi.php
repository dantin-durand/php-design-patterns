<?php

namespace App\Factory;



class Audi implements CarInterface
{
    public function getColor(): string
    {
        return 'black';
    }

    public function getHorsepower(): int
    {
        return 600;
    }

    public function getDoors(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return 'Audi';
    }

    public function getModel(): string
    {
        return 'RS6';
    }
}
