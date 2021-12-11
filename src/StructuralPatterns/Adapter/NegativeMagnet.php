<?php

namespace Lcarr\Designpatterns\StructuralPatterns\Adapter;

use Lcarr\Designpatterns\StructuralPatterns\Adapter\PositiveMagnet;

class NegativeMagnet
{
    public static function connects(PositiveMagnet $magnet): bool
    {
        return true;
    }
}
