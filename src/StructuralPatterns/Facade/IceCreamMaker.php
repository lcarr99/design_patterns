<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Chocolate;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\Vanilla;

class IceCreamMaker
{
    private Chocolate $chocolate;
    private Vanilla $vanilla;

    public function __construct()
    {
        $this->chocolate = new Chocolate();
        $this->vanilla = new Vanilla();
    }

    public function makeChocolate(): void
    {
        $this->chocolate->make();
    }

    public function makeVanilla(): void
    {
        $this->vanilla->make();
    }
}
