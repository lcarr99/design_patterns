<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Visitor;

class Arm implements HumanPart
{
    public function accept(HumanPartVisitor $humanPartVisitor): void
    {
        $humanPartVisitor->visit($this);
    }

    public function getClassName(): string
    {
        return self::class;
    }
}
