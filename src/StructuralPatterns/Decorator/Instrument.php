<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Decorator;

interface Instrument
{
    public function play(): bool;
    public function tune(): bool;
}
