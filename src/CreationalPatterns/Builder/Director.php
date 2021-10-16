<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Builder;

use Lcarr\DesignPatterns\CreationalPatterns\Builder\Builder;
use Lcarr\DesignPatterns\CreationalPatterns\Builder\House;

/**
 * Class Director
 */
class Director
{
    /**
     * @var Builder
     */
    private Builder $builder;

    /**
     * @param Builder $builder
     */
    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param int $doors
     * @param int $windows
     * @param int $rooms
     * @return House
     */
    public function buildHouse(
        int $doors,
        int $windows,
        int $rooms
    ): House {
        $this->builder->reset();
        $this->builder->setDoors($doors);
        $this->builder->setWindows($windows);
        $this->builder->setRooms($rooms);
        return $this->builder->getProduct();
    }
}
