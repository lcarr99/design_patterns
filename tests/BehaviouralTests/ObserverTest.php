<?php

use PHPUnit\Framework\TestCase;
use Lcarr\DesignPatterns\BehaviouralPatterns\Observer\Broadcaster;
use Lcarr\DesignPatterns\BehaviouralPatterns\Observer\Listener;

class ObserverTest extends TestCase
{
    private Broadcaster $broadcaster;

    protected function setUp(): void
    {
        $this->broadcaster = new Broadcaster();
    }

    public function testListenerIsUpdated(): void
    {
        $this->expectOutputString('Updated');

        $this->broadcaster->attach(new Listener());

        $this->broadcaster->notifyAllListeners();
    }
}
