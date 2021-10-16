<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Bridge;

use Lcarr\DesignPatterns\StructuralPatterns\Bridge\Console;

class Controller
{
    private Console $console;

    public function __construct(Console $console)
    {
        $this->console = $console;
    }

    public function togglePower(): void
    {
        $this->console->togglePower();
    }

    public function playGame(): void
    {
        $this->console->startGame();
    }

    public function pauseGame(): void
    {
        $this->console->pauseGame();
    }
}
