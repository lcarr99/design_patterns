<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory;

use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\Employee;

class Developer implements Employee
{
    private const wage = 40000;
    private string $requirements;

    public static function role(): string
    {
        return __CLASS__;
    }

    public static function isManager(): bool
    {
        return false;
    }

    public static function getWage(): float
    {
        return self::wage;
    }
}
