<?php

namespace  Lcarr\DesignPatterns\StructuralPatterns\Composite;

use Lcarr\DesignPatterns\StructuralPatterns\Composite\Soldier;

class General implements Soldier
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
        echo 'Yes Sir';
    }

    public function giveOrder(): void
    {
        echo 'order';
    }
}
