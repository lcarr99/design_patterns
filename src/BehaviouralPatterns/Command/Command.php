<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Command;

abstract class Command
{
    protected Application $app;
    protected Editor $editor;

    public function __construct(Application $app, Editor $editor)
    {
        $this->app = $app;
        $this->editor = $editor;
    }
}
