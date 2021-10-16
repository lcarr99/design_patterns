<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Builder;

/**
 * Interface Builder
 */
interface Builder
{
    /**
     *
     */
    public function reset(): void;

    /**
     * @param int $windows
     */
    public function setWindows(int $windows): void;

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void;

    /**
     * @param int $rooms
     */
    public function setRooms(int $rooms): void;

    /**
     * @return House
     */
    public function getProduct(): House;
}
