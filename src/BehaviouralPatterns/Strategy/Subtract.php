<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Strategy;

class Subtract implements Strategy
{
    public function doAction(int $numberOne, int $numberTwo)
    {
        return $numberOne - $numberTwo;
    }
}
