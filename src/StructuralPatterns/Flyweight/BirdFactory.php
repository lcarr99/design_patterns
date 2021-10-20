<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

class BirdFactory
{
    public array $birdTypes = [];

    public function getBirdType(string $name, string $color, string $family): BirdType
    {
        $birdType = new BirdType($name, $color, $family);
        $this->birdTypes[] = $birdType;
        return $birdType;
    }
}
