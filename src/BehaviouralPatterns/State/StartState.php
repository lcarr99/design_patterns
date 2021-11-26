<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\State;

class StartState implements State
{
    public function doAction(Context $context): void
    {
        echo 'State has been changed to start';
        $context->setState($this);
    }
}
