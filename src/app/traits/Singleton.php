<?php

namespace App\Traits;

trait Singleton
{
    private static ?object $instance = null;

    public static function getInstance(): object
    {
        return static::$instance ?? (static::$instance = new self());
    }
}