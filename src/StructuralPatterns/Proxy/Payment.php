<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

interface Payment
{
    public function pay(int $amount): bool;
}
