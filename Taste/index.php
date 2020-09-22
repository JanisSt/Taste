<?php
require __DIR__ . '/app/Taste.php';
require __DIR__ . '/app/TasteBuffet.php';


foreach (glob('app/Tastes/*.php') as $filename)
{
    require_once $filename;

}

use App\Tastes\{Sweet, Sour};
use App\Taste;
use App\TasteBuffet;



$tastes = new TasteBuffet();
$tastes->add(new Sweet());
$tastes->add(new Sour());
foreach ($tastes->all() as $taste) {
    /** @var Taste $taste */
    echo $taste->getTaste() . PHP_EOL;
}