<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Template;

class Guitar implements Instrument
{

    public function startPlaying(): void
    {
        echo 'Ding! Ding! Ding!';
    }

    public function finishPlaying(): void
    {
        echo 'Ding';
    }

    public function initialize(): void
    {
        echo 'Strings tuned, start playing.';
    }
}
