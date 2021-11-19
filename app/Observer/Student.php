<?php

namespace App\Observer;

class Student implements ObserverInterface
{
    public $name;
    public $email;
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function onNewInternship($internshipOffer)
    {
        echo "Salut {$this->name}, Une nouvelle offre d'emploi est disponible pour un poste de {$internshipOffer->role} dans la société {$internshipOffer->company}";
    }
}
