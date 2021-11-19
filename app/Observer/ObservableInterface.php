<?php

namespace App\Observer;

interface ObservableInterface
{
    public function attach(ObserverInterface $observer);
    public function addInternshipOffer(InternshipOffer $internshipOffer);
}
