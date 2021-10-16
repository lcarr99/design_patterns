<?php

namespace Lcarr\Designpatterns\StructuralPatterns\Adapter;

use Lcarr\Designpatterns\StructuralPatterns\Adapter;

class PositiveMagnet
{
    public function connects(NegativeMagnet $magnet): bool
    {
        return true;
    }
}
