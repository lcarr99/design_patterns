<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Prototype;

interface Virus
{
    public function copy(): Virus;
    public function infect(int $amountOfCopies): array;
}
