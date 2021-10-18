<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\IceCream;

class Vanilla implements IceCream
{
    public function make(): void
    {
        echo 'vanilla';
    }
}
