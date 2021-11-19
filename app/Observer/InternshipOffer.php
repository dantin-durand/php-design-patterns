<?php

namespace App\Observer;

class InternshipOffer
{

    public function __construct(public $company, public $role)
    {
    }
}
