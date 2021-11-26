<?php


namespace Lcarr\DesignPatterns\BehaviouralPatterns\Template;


class Drums implements Instrument
{

    public function startPlaying(): void
    {
        echo 'Bang! Bang! Bang!';
    }

    public function finishPlaying(): void
    {
        echo 'Crash!';
    }

    public function initialize(): void
    {
        echo 'Drum kit built, start playing.';
    }
}
