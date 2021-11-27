<?php


namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;


class Payment implements iPayment
{

    public function pay(int $amount): bool
    {
        echo 'Payment Made';
        return true;
    }
}
