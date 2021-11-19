<?php

namespace App\Facade;

class MacbookProFacade
{
    public function turnOn()
    {
        $macbookPro = new MacbookPro();
        $macbookPro->turnOnDisplay();
        $macbookPro->displayAppleLogo();
        $macbookPro->makeStartupSound();
        $macbookPro->displayUserLoginScreen();
    }
}
