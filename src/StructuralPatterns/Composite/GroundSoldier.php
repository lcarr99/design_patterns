<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

class GroundSoldier implements Soldier
{
    public static function getRole(): string
    {
        return 'Ground Soldier';
    }

    public function march(): void
    {
        echo 'Yes Sir';
    }
}
