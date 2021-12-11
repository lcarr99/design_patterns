<?php

use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\StructuralPatterns\Bridge\Xbox;
use Lcarr\DesignPatterns\StructuralPatterns\Bridge\Controller;

class BridgeTest extends TestCase
{
    public function testPowerIsOn(): void
    {
        $xbox = new Xbox();
        $controller = new Controller($xbox);

        $controller->togglePower();

        $this->assertEquals(true, $xbox->powerIsOn());
    }

    public function testPowerIsOff(): void
    {
        $xbox = new Xbox();
        $controller = new Controller($xbox);

        $controller->togglePower();
        $controller->togglePower();

        $this->assertEquals(false, $xbox->powerIsOn());
    }

    public function testGameIsPlaying(): void
    {
        $xbox = new Xbox();
        $controller = new Controller($xbox);

        $controller->togglePower();

        $controller->playGame();

        $this->assertEquals(true, $xbox->playingGame());
    }

    public function testGameIsNotPlayingWhenConsoleIsTurnedOnThenOff(): void
    {
        $xbox = new Xbox();
        $controller = new Controller($xbox);

        $controller->togglePower();

        $controller->playGame();

        $controller->togglePower();

        $this->assertEquals(false, $xbox->playingGame());
    }
}
