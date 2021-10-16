<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Decorator;

use Lcarr\DesignPatterns\StructuralPatterns\Decorator\Instrument;

class InstrumentDecorator implements Instrument
{
    protected $wrappee;

    public function __construct(Instrument $instrument)
    {
        $this->wrappee = $instrument;
    }

    public function play(): bool
    {
        return $this->wrappee->play();
    }

    public function tune(): bool
    {
        return $this->wrappee->tune();
    }
}
