<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Facade;

class BirdType
{
    public string $name;
    public string $color;
    public string $family;

    public function __construct(string $name, string $color, string $family)
    {
        $this->name = $name;
        $this->color = $color;
        $this->family = $family;
    }

    public function spawn(int $x, int $y): Bird
    {
        return new Bird($this, $x, $y);
    }
}
