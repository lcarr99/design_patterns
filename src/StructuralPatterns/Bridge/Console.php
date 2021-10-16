<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Bridge;

interface Console
{
    public function togglePower(): void;

    public function startGame(): void;

    public function pauseGame(): void;
}
