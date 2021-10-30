<?php

declare(strict_types=1);

namespace Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility;

class SubtractNumbers implements Chain
{
    use SetsNextHandler;

    private Chain $nextHandler;

    public function Calculate(Numbers $request): int
    {
        if ($request->calcRequested() === 'Subtract') {
            return $request->getNumberOne() - $request->getNumberTwo();
        } else {
            return $this->nextHandler->calculate($request);
        }
    }
}
