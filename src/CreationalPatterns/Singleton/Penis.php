<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Singleton;

class Penis
{
    private static ?int $length = 7;
    private static ?int $spermCount = 100;
    private static ?Penis $instance = null;

    public static function getInstance(): Penis
    {
        if (self::$instance === null)
        {
            self::$instance = new Penis();
        }

        return self::$instance;
    }

    public static function cum(): string
    {
        return 'ahhhhhh';
    }

    public static function piss(): string
    {
        return 'pssssssss';
    }
}
