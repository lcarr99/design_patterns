<?php

use Lcarr\DesignPatterns\StructuralPatterns\Composite\CompositeSoldier;
use Lcarr\DesignPatterns\StructuralPatterns\Composite\General;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    private CompositeSoldier $compositeSoldier;

    public function setUp(): void
    {
        $this->compositeSoldier = new CompositeSoldier();
    }

    public function testGeneralGetsAdded(): void
    {
        $this->compositeSoldier->add(new General());

        $soldiers = $this->compositeSoldier->getSoldiers();

        $this->assertEquals('General', $soldiers[0]->getRole());
    }

    public function testGeneralGetsRemoved(): void
    {
        $this->compositeSoldier->add(new General());

        $this->compositeSoldier->remove('General');

        $this->assertEmpty($this->compositeSoldier->getSoldiers());
    }
}
