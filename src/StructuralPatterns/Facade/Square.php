<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Shape;

class Square implements Shape
{
    public function draw(): void
    {
        echo 'square';
    }
}
