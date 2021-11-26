<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Visitor;

class Human implements HumanPart
{
    private array $humanParts;

    public function __construct()
    {
        $this->humanParts = [new Arm(), new Leg(),];
    }

    public function visit(HumanPartVisitor $humanPartVisitor): void
    {
        foreach ($this->humanParts as $part) {
            $part->accept($humanPartVisitor);
        }

        $humanPartVisitor->visit($this);
    }

    public function getClassName(): string
    {
        return self::class;
    }
}
