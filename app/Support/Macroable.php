<?php

namespace App\Support;

/**
 * 
 */
trait Macroable
{
    protected static $macros = [];

    public static function macro($name, $macro)
    {
        static::$macros[$name] = $macro;
    }
}
