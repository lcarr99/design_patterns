<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\IceCream;

class Chocolate implements IceCream
{
    public function make(): void
    {
        echo 'chocolate';
    }
}
