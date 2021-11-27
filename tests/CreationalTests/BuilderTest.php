<?php


namespace Lcarr\DesignPatterns\UnitTests\CreationalTests;

use Lcarr\DesignPatterns\CreationalPatterns\Builder\Director;
use Lcarr\DesignPatterns\CreationalPatterns\Builder\HouseBuilder;
use Lcarr\DesignPatterns\CreationalPatterns\Builder\House;

class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testHouseHasTenWindows(): void
    {
        $director = new Director();

        $director->setBuilder(new HouseBuilder());

        $house = $director->buildHouse(10, 10, 5);

        $this->assertEquals(10, $house->windows);
    }

    public function testHouseHasFiveDoors(): void
    {
        $director = new Director();

        $director->setBuilder(new HouseBuilder());

        $house = $director->buildHouse(5, 10, 4);

        $this->assertEquals(5, $house->doors);
    }

    public function testHouseHasFiveRooms(): void
    {
        $director = new Director();

        $director->setBuilder(new HouseBuilder());

        $house = $director->buildHouse(5, 10, 5);

        $this->assertEquals(5, $house->rooms);
    }
}
