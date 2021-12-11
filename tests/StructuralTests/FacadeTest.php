<?php

use Lcarr\DesignPatterns\StructuralPatterns\Facade\Chocolate;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\Vanilla;
use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\IceCreamMaker;

class FacadeTest extends TestCase
{
    public function testCorrectIceCreamsAreMade(): void
    {
        $iceCreamMaker = new IceCreamMaker();
        $this->assertEquals(new Chocolate(), $iceCreamMaker->makeChocolate());
        $this->assertEquals(new Vanilla(), $iceCreamMaker->makeVanilla());
    }
}
