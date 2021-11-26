<?php

namespace Lcarr\DesignPatterns\BehaviouralPatterns\Visitor;

class HumanPartVisitor
{
    public function visit(HumanPart $humanPart): void
    {
        echo 'Moving '.  $humanPart->getClassName();
    }
}
