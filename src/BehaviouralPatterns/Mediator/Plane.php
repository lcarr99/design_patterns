<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Mediator;

class Plane
{
    private bool $flying = false;
    private bool $takingOff = false;
    private bool $preparing = false;
    public string $planeNumber;

    public function __construct($planeNumber)
    {
        $this->planeNumber = $planeNumber;
    }

    public function takeOff(): void
    {
        if ($this->preparing === true) {
            $this->preparing = !$this->preparing;
            $this->flying = true;
        }
    }

    public function land(): void
    {
        $this->flying = false;
    }

    public function startPreparing(): void
    {
        $this->preparing = true;
    }
}
