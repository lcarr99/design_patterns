<?php

namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Exception;
use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\CreationalPatterns\Singleton\Penis;

class SingletonTest extends TestCase
{
    public function testPenisInstanceIsReturned(): void
    {
        $this->assertEquals((new Penis()), Penis::getInstance());
    }

    public function testCumReturnsString(): void
    {
        $this->assertEquals('ahhhhhh', Penis::cum());
    }
}
