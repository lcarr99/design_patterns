<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Observer;

class Broadcaster
{
    private array $listeners;
    private int $state;

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state): void
    {
        $this->state = $state;
    }

    public function notifyAllListeners(): void
    {
        foreach ($this->listeners as $listener) {
            $listener->update();
        }
    }

    public function attach(Listener $listener): void
    {
        $this->listeners[] = $listener;
    }
}
