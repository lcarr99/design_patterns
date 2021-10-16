<?php

namespace Lcarr\Designpatterns\CreationalPatterns\AbstractFactory;

interface Employee
{
    public function isManager(): bool;
    public function getWage(): float;
    public function role(): string;
}
