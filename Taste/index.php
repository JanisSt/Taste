<?php
require __DIR__ . '/app/Taste.php';
require_once __DIR__ .  '/app/Tastes/Sweet.php';
require_once __DIR__ .  '/app/Tastes/Sour.php';
use App\Tastes\{Sweet, Sour};
use App\Taste;



class TasteBufeet
{

    private array $tastes = [];

    public function add(Taste $taste): void
    {
        $this->tastes[] = $taste;
    }

    public function all(): array
    {
        return $this->tastes;
    }
}

$tastes = new TasteBufeet();
$tastes->add(new Sweet());
$tastes->add(new Sour());
foreach ($tastes->all() as $taste) {
    /** @var Taste $taste */
    echo $taste->getName() . ' ' . $taste->getTaste() . PHP_EOL;
}