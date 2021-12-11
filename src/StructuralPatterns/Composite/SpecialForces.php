<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

class SpecialForces implements Soldier
{
    public static function getRole(): string
    {
        return 'Special Forces';
    }

    public function march(): void
    {
        echo 'Yes Sir';
    }
}
