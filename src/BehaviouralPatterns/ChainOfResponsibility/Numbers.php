<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility;

class Numbers
{
    private int $numberOne;
    private int $numberTwo;
    private string $calculationRequested;

    public function __construct(int $newNumberOne, int $newNumberTwo, string $calculationRequested)
    {
        $this->numberOne = $newNumberOne;
        $this->numberTwo = $newNumberTwo;
        $this->calculationRequested = $calculationRequested;
    }

    public function getNumberOne(): int
    {
        return $this->numberOne;
    }

    public function getNumberTwo(): int
    {
        return $this->numberTwo;
    }

    public function calcRequested(): string
    {
        return $this->calculationRequested;
    }
}
