<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Factory;

use Lcarr\DesignPatterns\CreationalPatterns\Factory\Boat;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\Logistics;
use Lcarr\DesignPatterns\CreationalPatterns\Factory\Transport;

class SeaLogistics implements Logistics
{
    public function createTransport(): Transport
    {
        return new Boat();
    }
}
