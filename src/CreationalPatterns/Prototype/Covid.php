<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Prototype;

use Lcarr\DesignPatterns\CreationalPatterns\Prototype\Virus;

class Covid implements Virus
{
    public int $spikes = 10;

    public function infect(int $amountOfCopies): array
    {
        $copies = [];

        for($i = 0; $i < $amountOfCopies; $i++)
        {
            $copies[] = $this->copy();
        }

        return $copies;
    }

    public function copy(): \Lcarr\Designpatterns\CreationalPatterns\Prototype\Covid
    {
        return new Covid();
    }
}
