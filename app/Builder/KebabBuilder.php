<?php

namespace App\Builder;


class KebabBuilder
{
    public function __construct()
    {
        $this->kebab = $this->build();
    }

    public function build()
    {
        return new Kebab;
    }

    public function addCheese()
    {
        $this->kebab->setCheese(true);
        return $this;
    }
    public function addSalad()
    {
        $this->kebab->setSalad(true);
        return $this;
    }
    public function addTomato()
    {
        $this->kebab->setTomato(true);
        return $this;
    }
    public function addOnion()
    {
        $this->kebab->setOnion(true);
        return $this;
    }
    public function addFrenchFries()
    {
        $this->kebab->setFrenchFries(true);
        return $this;
    }
}
