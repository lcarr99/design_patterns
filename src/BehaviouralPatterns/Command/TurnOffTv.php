<?php

use Lcarr\DesignPatterns\BehaviouralPatterns\Command\Command;

class TurnOffTv extends Command
{
    public function execute(): void
    {
        $this->television->off();
    }
}
