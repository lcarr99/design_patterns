<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

class TurnOnTv extends Command
{
    public function execute(): void
    {
        $this->television->on();
    }
}
