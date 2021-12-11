<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility;

interface Chain
{
    public function Calculate(Numbers $request): int;
}
