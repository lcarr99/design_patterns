<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Memento;

class Memento
{
    private string $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
