<?php
namespace App\Tastes;
use App\Taste;
class Sour extends Taste
{
    public function getTaste(): string
    {
        return "Lemon";
    }
}