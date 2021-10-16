<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Factory;

use Lcarr\DesignPatterns\CreationalPatterns\Factory\Logistics;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\Transport;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\Truck;

class RoadLogistics implements Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
