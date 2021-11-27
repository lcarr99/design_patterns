<?php

namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Lcarr\DesignPatterns\CreationalPatterns\Factory\Boat;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\SeaLogistics;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\Truck;
use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\RoadLogistics;

class FactoryTest extends TestCase
{
    public function testRoadLogisticsCreateTransportReturnsTruck(): void
    {
        $roadLogistics = new RoadLogistics();
        $this->assertEquals(new Truck(), $roadLogistics->createTransport());
    }

    public function testSeaLogisticsCreateTransportReturnsBoat(): void
    {
        $boatLogistics = new SeaLogistics();
        $this->assertEquals(new Boat(), $boatLogistics->createTransport());
    }
}
