<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

class Card implements iPayment
{
    public function pay(int $amount): void
    {
        echo 'Transaction Approved';
    }
}
