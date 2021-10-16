<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

use Lcarr\DesignPatterns\StructuralPatterns\Composite\General;

Class Commando extends General
{
    public function fireGun(): void
    {
        parent::fireGun();
    }

    public function salute(): void
    {
        parent::salute();
    }

    public function march(): void
    {
        parent::march();
    }

    public function takeOrder(): void
    {
        echo 'Done Sir';
    }
}
