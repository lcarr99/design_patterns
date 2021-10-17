<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Circle;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\Square;

class ShapeMaker
{
    private Circle $circle;
    private Square $square;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->square = new Square();
    }

    public function drawCircle(): void
    {
        $this->circle->draw();
    }

    public function drawSquare(): void
    {
        $this->square->draw();
    }
}
