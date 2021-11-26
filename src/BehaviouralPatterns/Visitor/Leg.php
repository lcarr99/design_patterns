<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Visitor;

class Leg implements HumanPart
{
    public function visit(HumanPartVisitor $humanPartVisitor): void
    {
        $humanPartVisitor->visit($this);
    }

    public function getClassName(): string
    {
        return self::class;
    }
}
