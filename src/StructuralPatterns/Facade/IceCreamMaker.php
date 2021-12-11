<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Chocolate;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\Vanilla;

class IceCreamMaker
{
    public function makeChocolate(): IceCream
    {
        return new Chocolate();
    }

    public function makeVanilla(): IceCream
    {
        return new Vanilla();
    }
}
