<?php

namespace App\Builder;

class Kebab
{
    private $cheese = false;
    private $salad = false;
    private $tomato = false;
    private $onion = false;
    private $frenchFries = false;

    /**
     * Get the value of cheese
     */
    public function getCheese()
    {
        return $this->cheese;
    }

    /**
     * Set the value of cheese
     *
     * @return  self
     */
    public function setCheese($cheese)
    {
        $this->cheese = $cheese;

        return $this;
    }

    /**
     * Get the value of salad
     */
    public function getSalad()
    {
        return $this->salad;
    }

    /**
     * Set the value of salad
     *
     * @return  self
     */
    public function setSalad($salad)
    {
        $this->salad = $salad;

        return $this;
    }

    /**
     * Get the value of tomato
     */
    public function getTomato()
    {
        return $this->tomato;
    }

    /**
     * Set the value of tomato
     *
     * @return  self
     */
    public function setTomato($tomato)
    {
        $this->tomato = $tomato;

        return $this;
    }

    /**
     * Get the value of onion
     */
    public function getOnion()
    {
        return $this->onion;
    }

    /**
     * Set the value of onion
     *
     * @return  self
     */
    public function setOnion($onion)
    {
        $this->onion = $onion;

        return $this;
    }

    /**
     * Get the value of frenchFries
     */
    public function getFrenchFries()
    {
        return $this->frenchFries;
    }

    /**
     * Set the value of frenchFries
     *
     * @return  self
     */
    public function setFrenchFries($frenchFries)
    {
        $this->frenchFries = $frenchFries;

        return $this;
    }
}
