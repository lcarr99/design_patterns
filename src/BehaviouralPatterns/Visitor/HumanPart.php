<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Visitor;

interface HumanPart
{
    public function visit(HumanPartVisitor $humanPartVisitor): void;

    public function getClassName(): string;
}
