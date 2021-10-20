<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

class Bird
{
    private int $x, $y;
    private BirdType $birdType;

    public function __construct(BirdType $birdType, int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->birdType = $birdType;
    }

    public function spawn(int $x, int $y): void
    {
        $this->birdType->spawn($x, $y);
    }
}
