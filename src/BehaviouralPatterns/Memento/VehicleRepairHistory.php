<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Memento;

class VehicleRepairHistory
{
    private array $stateHistory;

    public function addState($state): void
    {
        $stateHistory[] = $state;
    }

    public function getState(int $key): VehicleRepairState
    {
        return $this->stateHistory[$key];
    }
}
