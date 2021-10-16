<?php

require __DIR__ . '/vendor/autoload.php';

use Lcarr\DesignPatterns\CreationalPatterns\Prototype\Covid;

$covid = new Covid();

$covidClones = $covid->infect(10);

$moreClones = [];

foreach ($covidClones as $clone) {
    $moreClones[] = $clone->infect(10);
}
