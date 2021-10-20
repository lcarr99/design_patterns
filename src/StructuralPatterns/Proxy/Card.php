<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

class Card implements Payment
{
    public function pay(int $amount): bool
    {
        echo 'Transaction Approved';
        return true;
    }
}
