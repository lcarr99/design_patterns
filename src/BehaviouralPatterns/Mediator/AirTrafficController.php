<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Mediator;

class AirTrafficController
{
    public static function commandTakeOff(Plane $plane): Plane
    {
        $plane->takeOff();

        return $plane;
    }

    public static function commandLand(Plane $plane): Plane
    {
        $plane->land();

        return $plane;
    }

    public static function commandPreparation(Plane $plane): Plane
    {
        $plane->startPreparing();

        return $plane;
    }
}
