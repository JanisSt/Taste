<?php
namespace App\Tastes;
use App\Taste;
class Sweet extends Taste
{

    public function getTaste(): string
    {
        return "Cherry";
    }
}