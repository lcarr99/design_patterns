<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Composite;

interface Soldier
{
    public function march(): void;

    public function fireGun(): void;

    public function salute(): void;
}
