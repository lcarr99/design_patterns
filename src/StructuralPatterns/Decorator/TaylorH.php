<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Decorator;

use Lcarr\DesignPatterns\StructuralPatterns\Decorator\Instrument;

class TaylorH
{
    private Instrument $instrument;

    public function __construct(Instrument $instrument)
    {
        $this->instrument = $instrument;
    }

    public function rockTheHouse(): bool
    {
        return $this->instrument->play();
    }

    public function prepare(): bool
    {
        return $this->instrument->tune();
    }
}
