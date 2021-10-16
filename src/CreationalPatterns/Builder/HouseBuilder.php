<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Builder;

use Lcarr\DesignPatterns\CreationalPatterns\Builder\Builder;
use Lcarr\DesignPatterns\CreationalPatterns\Builder\House;

/**
 * Class HouseBuilder
 */
class HouseBuilder implements Builder
{
    /**
     * @var House
     */
    private House $house;

    /**
     * HouseBuilder constructor.
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     *
     */
    public function reset(): void
    {
        $this->house = new House();
    }

    /**
     * @param int $windows
     */
    public function setWindows(int $windows): void
    {
        $this->house->windows = $windows;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->house->doors = $doors;
    }

    /**
     * @param int $rooms
     */
    public function setRooms(int $rooms): void
    {
        $this->house->rooms = $rooms;
    }

    /**
     * @return House
     */
    public function getProduct(): House
    {
        $product = $this->house;
        $this->reset();
        return $product;
    }
}
