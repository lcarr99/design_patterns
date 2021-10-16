<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Decorator;

use Lcarr\DesignPatterns\StructuralPatterns\Decorator\Instrument;

class Drums implements Instrument
{
    public function play(): bool
    {
        echo 'Bang';
        return true;
    }

    public function tune(): bool
    {
        echo 'Screw';
        return true;
    }
}
