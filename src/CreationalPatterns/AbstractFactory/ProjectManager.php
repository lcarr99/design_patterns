<?php

namespace Lcarr\Designpatterns\CreationalPatterns\AbstractFactory;

use Lcarr\Designpatterns\CreationalPatterns\AbstractFactory\Employee;

class ProjectManager implements Employee
{
    public function isManager(): bool
    {
        return true;
    }

    public function getWage(): float
    {
        return 60000.00;
    }

    public function role(): string
    {
        return __CLASS__;
    }
}
