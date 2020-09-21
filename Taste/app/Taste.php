<?php

namespace App;


abstract class Taste
{
    public abstract function getTaste(): string;

    public function getName(): string
    {
        return get_class($this);
    }
}