<?php

namespace Lcarr\Designpatterns\StructuralPatterns\Adapter;

use Lcarr\Designpatterns\StructuralPatterns\Adapter;

class PositiveMagnet
{
    public static function connects(NegativeMagnet $magnet): bool
    {
        return true;
    }
}
