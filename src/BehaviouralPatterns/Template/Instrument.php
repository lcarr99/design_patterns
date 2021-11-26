<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Template;

interface Instrument
{
    public function startPlaying(): void;

    public function finishPlaying(): void;

    public function initialize(): void;
}
