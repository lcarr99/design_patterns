<?php

use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Adapter\NegativeMagnet;
use Lcarr\DesignPatterns\StructuralPatterns\Adapter\PositiveMagnet;

class AdapterTest extends TestCase
{
    public function testSuccessfulConnection(): void
    {
        $this->assertEquals(true, NegativeMagnet::connects(new PositiveMagnet()));

        $this->assertEquals(true, PositiveMagnet::connects(new NegativeMagnet()));
    }

    public function testNegativeDoesntConnectToNegative(): void
    {
        $this->expectException(TypeError::class);

        NegativeMagnet::connects(new NegativeMagnet());
    }

    public function testPositiveDoesntConnectToPositive(): void
    {
        $this->expectException(TypeError::class);

        PositiveMagnet::connects(new PositiveMagnet());
    }
}
