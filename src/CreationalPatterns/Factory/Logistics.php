<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Factory;

use Lcarr\DesignPatterns\CreationalPatterns\Factory\Transport;

interface Logistics
{
    public function createTransport(): Transport;
}
