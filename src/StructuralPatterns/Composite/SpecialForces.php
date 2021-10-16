<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

use Lcarr\DesignPatterns\StructuralPatterns\Composite\Soldier;

class SpecialForces implements Soldier
{
    public function march(): void
    {
        echo 'thump';
    }

    public function fireGun(): void
    {
        echo 'boom';
    }

    public function salute(): void
    {
        echo 'yes sir!!!';
    }
}
