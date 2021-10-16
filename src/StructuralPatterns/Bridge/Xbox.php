<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Bridge;

use Lcarr\DesignPatterns\StructuralPatterns\Bridge\Console;

class Xbox implements Console
{
    private bool $power = false;
    private bool $playingGame = false;
    private bool $paused = false;

    public function togglePower(): void
    {
        if ($this->power) {
            $this->power = false;
            return;
        }

        $this->power = true;
    }

    public function startGame(): void
    {
        $this->playingGame = true;
    }

    public function pauseGame(): void
    {
        $this->paused = true;

        $this->playingGame = false;
    }
}
