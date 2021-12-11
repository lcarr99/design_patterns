<?php

namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\Developer;
use Lcarr\DesignPatterns\CreationalPatterns\AbstractFactory\ProjectManager;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testProjectManagerIsAManager(): void
    {
        $this->assertEquals(true, ProjectManager::isManager());
    }

    public function testDeveloperIsNotAManager(): void
    {
        $this->assertEquals(false, Developer::isManager());
    }
}
