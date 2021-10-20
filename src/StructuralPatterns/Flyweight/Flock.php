<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

class Flock
{
    private array $birds;

    public function __construct()
    {
        $this->birds = [];
    }

    public function spawnBird(BirdType $birdType, int $x, int $y): Bird
    {
        return new Bird($birdType, $x, $y);
    }

    public function flyTogether(): void
    {
        echo 'caw';
    }
}
