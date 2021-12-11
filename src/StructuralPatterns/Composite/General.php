<?php

namespace  Lcarr\DesignPatterns\StructuralPatterns\Composite;

use Lcarr\DesignPatterns\StructuralPatterns\Composite\Soldier;

class General implements Soldier
{
    public static function getRole(): string
    {
        return 'General';
    }

    public function march(): void
    {
        echo 'Yes Sir';
    }
}
