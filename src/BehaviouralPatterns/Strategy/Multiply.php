<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Strategy;

class Multiply implements Strategy
{
    public function doAction(int $numberOne, int $numberTwo)
    {
        return $numberOne * $numberTwo;
    }
}
