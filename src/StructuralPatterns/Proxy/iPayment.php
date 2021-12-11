<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

interface iPayment
{
    public function pay(int $amount): void;
}
