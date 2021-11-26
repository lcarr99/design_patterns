<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\State;

interface State
{
    public function doAction (Context $context): void;
}
