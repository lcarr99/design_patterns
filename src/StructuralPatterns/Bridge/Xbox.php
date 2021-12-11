<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Bridge;

use Lcarr\DesignPatterns\StructuralPatterns\Bridge\Console;
use phpDocumentor\Reflection\Types\True_;

class Xbox implements Console
{
    private bool $power = false;
    private bool $playingGame = false;

    public function togglePower(): void
    {
        if ($this->power) {
            $this->power = false;
            $this->playingGame = false;
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
        $this->playingGame = false;
    }

    public function powerIsOn(): bool
    {
        return $this->power;
    }

    public function playingGame()
    {
        return $this->playingGame;
    }
}
