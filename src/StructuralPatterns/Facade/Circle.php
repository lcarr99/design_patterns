<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Shape;

class Circle implements Shape
{
    public function draw(): void
    {
        echo 'circle';
    }
}
