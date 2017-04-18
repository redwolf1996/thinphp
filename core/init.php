<?php
namespace core;

class init
{
    public static $class_map = [];

    public static function run()
    {
        dump('OK');
    }

    public static function autoload($class)
    {
        if(isset($class_map[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/', $class);
            $file = BASEPATH. '/' . $class .'.php';

            if(is_file($file)){
                require $file;
                self::$class_map[$class] = $class;
            }else{
                return false;
            }
        }
    }
}