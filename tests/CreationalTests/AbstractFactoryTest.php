<?php

namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\Developer;
use Lcarr\Designpatterns\CreationalPatterns\AbstractFactory\ProjectManager;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testProjectManagerIsAManager(): void
    {
        $this->assertTrue(ProjectManager::isManager());
    }

    public function testDeveloperIsNotAManager(): void
    {
        $this->assertFalse(Developer::isManager());
    }
}
