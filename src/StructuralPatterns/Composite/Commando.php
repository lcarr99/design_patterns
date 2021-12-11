<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

Class Commando implements Soldier
{
    public static function getRole(): string
    {
        return 'Commando';
    }

    public function march(): void
    {
        echo 'Yes Sir';
    }
}
