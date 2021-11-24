<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Memento;

class VehicleRepairState
{
    private string $status;

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function saveStatusToMemento(): Memento
    {
        return new Memento($this->status);
    }

    public function getStatusFromMemento(Memento $memento): string
    {
        return $memento->getState();
    }
}
