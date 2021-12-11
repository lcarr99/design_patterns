<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

use Lcarr\DesignPatterns\BehaviouralPatterns\Command\TurnOnTv;

class Television
{
    private bool $on = false;

    public function turnOn(): void
    {
        $this->on = true;
    }

    public function turnOff(): void
    {
        $this->on = false;
    }

    public function isTurnedOn(): bool
    {
        return $this->on;
    }
}
