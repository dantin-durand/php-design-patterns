<?php

namespace App\Factory;



class Tesla implements CarInterface
{
    public function getColor(): string
    {
        return 'black';
    }

    public function getHorsepower(): int
    {
        return 1020;
    }

    public function getDoors(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return 'Tesla';
    }

    public function getModel(): string
    {
        return 'Model S';
    }
}
