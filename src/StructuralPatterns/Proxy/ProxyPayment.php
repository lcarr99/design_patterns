<?php

namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;

class ProxyPayment implements iPayment
{
    private iPayment $paymentMethod;

    public function __construct(iPayment $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function pay(int $amount): void
    {
        $this->paymentMethod->pay($amount);
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
}
