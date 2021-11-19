<?php
require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

use App\Factory\CarFactory;
use App\Singleton\DB;
use App\Builder\KebabBuilder;
use App\Adapter\TwitterAdapter;
use App\Adapter\Twitter;
use App\Adapter\InstagramAdapter;
use App\Adapter\Instagram;
use App\Facade\MacbookProFacade;
use App\Facade\MacbookPro;
use App\Decorator\SingleRoom;
use App\Decorator\DoubleRoom;
use App\Decorator\PrivateBathroom;
use App\Decorator\Kitchen;
use App\Decorator\Parking;
use App\Observer\Student;
use App\Observer\PoleEmploi;
use App\Observer\InternshipOffer;

/**
 * Factory
 */
$rs6 = CarFactory::make("Audi", 3, "black");
echo $rs6->getBrand();
echo $rs6->getModel();

$modelS = CarFactory::make("Tesla", 5, "black");
echo $modelS->getBrand();
echo $modelS->getModel();

try {
    $meganeRS = CarFactory::make("Renault", 5, "orange");
} catch (\Exception $e) {
    echo $e->getMessage();
}

/**
 * Singleton
 */
$db = DB::getInstance();
$db2 = DB::getInstance();

$check = $db == $db2;
print_r($check); //true

$users = $db->raw()->query("SELECT * FROM users");
print_r($users);

/**
 * Builder
 */
$kebab = (new KebabBuilder)->addTomato()
    ->addSalad()
    ->addOnion();

print_r($kebab);

/**
 * Adapter
 */
$photoTwitter = new TwitterAdapter(new Twitter);
echo $twitterUserToken = $photoTwitter->getuserToken(1);
$photoTwitter->postPhoto("test", "http://test.com/image.jpg");

$photoInstagram = new InstagramAdapter(new Instagram);
echo $instagramUserToken = $photoInstagram->getuserToken(1);
$photoInstagram->postPhoto("test", "http://test.com/image.jpg");

/**
 * Facade
 */
$macbookpro = new MacbookProFacade(new MacbookPro);
$macbookpro->turnOn();

/**
 * Decorator
 */
$booking = new SingleRoom();
echo $booking->getCost(); // 30
echo $booking->getDescription(); // Single room

$booking = new DoubleRoom($booking);
echo $booking->getCost(); // 50
echo $booking->getDescription(); // Single room, double room update

$booking = new PrivateBathroom($booking);
echo $booking->getCost(); // 70
echo $booking->getDescription(); // Single room, double room update, private bathroom

$booking = new Kitchen($booking);
echo $booking->getCost(); // 80
echo $booking->getDescription(); // Single room, double room update, private bathroom, kitchen
$booking = new Parking($booking);
echo $booking->getCost(); // 85
echo $booking->getDescription(); // Single room, double room update, private bathroom, kitchen, parking

/**
 * Observer
 */
$clement = new Student("Clément", "clem@ent.fr");
$tomy = new Student("Tomy", "to@my.fr");

$poleEmploi = new PoleEmploi();
$poleEmploi->attach($clement);
$poleEmploi->attach($tomy);

$poleEmploi->addInternshipOffer(new InternshipOffer("Google", "Dev Full-Stack"));
