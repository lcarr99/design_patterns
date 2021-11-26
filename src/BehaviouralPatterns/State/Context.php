<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\State;

class Context
{
    private ?State $state = null;

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getState(): State
    {
        return $this->state;
    }
}
