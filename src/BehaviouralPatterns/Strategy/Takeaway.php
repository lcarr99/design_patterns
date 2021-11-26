<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Strategy;

class Takeaway implements Strategy
{
    public function doAction(int $numberOne, int $numberTwo)
    {
        return $numberOne - $numberTwo;
    }
}
