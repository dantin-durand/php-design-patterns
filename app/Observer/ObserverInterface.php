<?php

namespace App\Observer;

interface ObserverInterface
{
    public function onNewInternship(InternshipOffer $internshipOffer);
}
