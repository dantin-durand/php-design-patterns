<?php

namespace App\Factory;

use Exception;

class CarException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
