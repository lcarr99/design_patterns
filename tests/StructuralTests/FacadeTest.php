<?php

use Exception;
use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Facade\ShapeMaker;

class FacadeTest extends TestCase
{
    public function testDrawCircleDrawsCircle(): void
    {
        $shapeMaker = new ShapeMaker();
        $this->assertEquals(null, $shapeMaker->drawCircle());
    }
}
