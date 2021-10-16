<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory;

use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\Employee;

class Developer implements Employee
{
    private string $requirements;

    public function __construct()
    {
    }

    public function role(): string
    {
        return __CLASS__;
    }

    public function isManager(): bool
    {
        return false;
    }

    public function getWage(): float
    {
        return 40000.00;
    }

    public function setRequirements(string $requirements): void
    {
        $this->requirements = $requirements;
    }
}
