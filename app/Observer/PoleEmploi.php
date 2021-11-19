<?php

namespace App\Observer;

class PoleEmploi implements ObservableInterface
{

    protected $observers = [];

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function addInternshipOffer(InternshipOffer $internshipOffer)
    {
        foreach ($this->observers as $student) {
            $student->onNewInternship($internshipOffer);
        }
    }
}
