<?php

namespace Lcarr\DesignPatterns\UnitTests\StructuralTests;

use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Decorator\TaylorH;
use Lcarr\DesignPatterns\StructuralPatterns\Decorator\Drums;

class DecoratorTest extends TestCase
{
    public function testRockTheHouseReturnTrue(): void
    {
        $drums = new Drums();
        $taylorH = new TaylorH($drums);
        $this->assertEquals(true, $taylorH->rockTheHouse());
    }
}
