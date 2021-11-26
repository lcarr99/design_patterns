<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\State;

class FinishState implements State
{
    public function doAction(Context $context): void
    {
        echo 'State has been changed to finish';
        $context->getState($this);
    }
}
