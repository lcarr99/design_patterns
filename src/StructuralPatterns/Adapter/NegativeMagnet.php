<?php

namespace Lcarr\Designpatterns\StructuralPatterns\Adapter;

use Lcarr\Designpatterns\StructuralPatterns\Adapter\PositiveMagnet;

class NegativeMagnet
{
    public function connects(PositiveMagnet $magnet): bool
    {
        return true;
    }
}
