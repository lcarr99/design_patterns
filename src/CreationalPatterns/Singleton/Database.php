<?php

namespace Lcarr\DesignPatterns\CreationalPatterns\Singleton;

class Database
{
    private static ?Database $instance = null;

    public static function getInstance(): Database
    {
        if (self::$instance === null)
        {
            self::$instance = new Database();
        }

        return self::$instance;
    }
}
