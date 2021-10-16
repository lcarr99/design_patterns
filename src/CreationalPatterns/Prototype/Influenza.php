<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Prototype;

use Lcarr\DesignPatterns\CreationalPatterns\Prototype\Virus;

class Influenza implements Virus
{
    public int $spikes = 8;

    public function infect(int $amountOfCopies): array
    {
        $copies = [];

        for($i = 0; $i < $amountOfCopies; $i++)
        {
            $copies[] = $this->copy();
        }

        return $copies;
    }

    public function copy(): \Lcarr\Designpatterns\CreationalPatterns\Prototype\Influenza
    {
        return $this;
    }
}
