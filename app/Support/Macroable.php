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

    public function __call($method, $args)
    {
        $macro = static::$macros[$method];
        
        if ($macro instanceof \Closure) {
            call_user_func_array($macro, $args);
        }
    }
}
