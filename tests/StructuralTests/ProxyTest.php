<?php

use Lcarr\DesignPatterns\StructuralPatterns\Proxy\Card;
use Lcarr\DesignPatterns\StructuralPatterns\Proxy\Cash;
use Lcarr\DesignPatterns\StructuralPatterns\Proxy\ProxyPayment;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testMessageOnCashPayment(): void
    {
        $this->expectOutputString('thanks');

        $cashPayment = new ProxyPayment(new Cash());

        $cashPayment->pay(100);
    }

    public function testMessageOnCardPayment(): void
    {
        $this->expectOutputString('Transaction Approved');

        $cardPayment = new ProxyPayment(new Card());

        $cardPayment->pay(20);
    }
}
