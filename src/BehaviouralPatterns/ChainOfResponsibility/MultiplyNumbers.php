<?php


namespace Lcarr\DesignPatterns\BehaviouralPatterns\ChainOfResponsibility;


class MultiplyNumbers implements Chain
{
    use SetsNextHandler;

    private Chain $nextHandler;

    public function Calculate(Numbers $request): int
    {
        if ($request->calcRequested() === 'Multiply') {
            return $request->getNumberOne() * $request->getNumberTwo();
        } else {
            return $this->nextHandler->calculate($request);
        }
    }
}
