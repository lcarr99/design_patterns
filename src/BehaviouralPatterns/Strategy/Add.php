<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Strategy;

class Add implements Strategy
{
    public function doAction(int $numberOne, int $numberTwo)
    {
        return $numberOne + $numberTwo;
    }
}
