<?php

namespace core;

class thin
{
    public function __construct()
    {

    }

    public static function run()
    {
        $route = new route();
    }

    public static function autoload($class)
    {
        $class = str_replace('\\', '/', $class);
        require_once BASEPATH. '/' . $class .'.php';
    }
}