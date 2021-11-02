<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

use Lcarr\DesignPatterns\BehaviouralPatterns\Command\Command;

abstract class DeviceButton
{
    public function press(Command $command): void
    {
        $command->execute();
    }
}
