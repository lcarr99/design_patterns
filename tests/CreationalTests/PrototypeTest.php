<?php

namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Exception;
use Lcarr\DesignPatterns\CreationalPatterns\Prototype\Virus;
use Lcarr\DesignPatterns\CreationalPatterns\Prototype\Covid;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     *
     */
    public function testCovidInfectReturnsCorrectArray(): void
    {
        $covid = new Covid();
        $this->assertEquals(10, count($covid->infect(10)));
    }
}
