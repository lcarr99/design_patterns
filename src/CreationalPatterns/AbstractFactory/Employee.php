<?php

namespace Lcarr\Designpatterns\CreationalPatterns\AbstractFactory;

interface Employee
{
    public static function isManager(): bool;
    public static function getWage(): float;
    public static function role(): string;
}
