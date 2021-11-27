<?php


namespace Lcarr\DesignPatterns\StructuralPatterns\Proxy;


class ProxyPayment implements iPayment
{
    private iPayment $paymentMethod;
    private Payment $realPayment;

    public function __construct(iPayment $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
        $this->transaction = new Transaction($amount);
    }

    public function pay(int $amount): bool
    {
        $this->paymentMethod->pay($amount);
    }
}
