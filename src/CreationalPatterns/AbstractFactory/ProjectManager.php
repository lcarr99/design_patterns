<?php

namespace Lcarr\Designpatterns\CreationalPatterns\AbstractFactory;

use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\Employee;

class ProjectManager implements Employee
{
    private const wage = 60000;

    public static function isManager(): bool
    {
        return true;
    }

    public static function getWage(): float
    {
        return self::wage;
    }

    public static function role(): string
    {
        return __CLASS__;
    }
}
