<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility;

use Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility\Chain;

trait SetsNextHandler
{
    public function setNextHandler (Chain $nextHandler): void
    {
        $this->nextHandler = $nextHandler;
    }
}
