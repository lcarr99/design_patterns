<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

class Transaction
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
}
