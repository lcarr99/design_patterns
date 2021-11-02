<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

use Lcarr\DesignPatterns\BehaviouralPatterns\Command\TurnOnTv;

class Television
{
    private bool $on = false;
    private TurnOnTv $turnOnTv;

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }
}
