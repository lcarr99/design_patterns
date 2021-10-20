<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

class Cash implements Payment
{
    public function pay(int $amount): bool
    {
        echo 'thanks';
        return true;
    }
}
