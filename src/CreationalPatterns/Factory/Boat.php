<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Factory;

use Lcarr\DesignPatterns\CreationalPatterns\Factory\Transport;

class Boat implements Transport
{
    public function deliver(): void
    {
        echo 'Delivered';
    }
}
