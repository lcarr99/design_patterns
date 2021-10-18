<?php

use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\IceCreamMaker;

class FacadeTest extends TestCase
{
    public function testCorrectIceCreamsAreMade(): void
    {
        $iceCreamMaker = new IceCreamMaker();
        $this->assertEquals(null, $iceCreamMaker->makeChocolate());
        $this->assertEquals(null, $iceCreamMaker->makeVanilla());
    }
}
