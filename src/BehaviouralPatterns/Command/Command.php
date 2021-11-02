<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

abstract class Command
{
    protected Television $television;

    public function __construct(Television $television)
    {
        $this->television = $television;
    }

    abstract public function execute(): void;
}
