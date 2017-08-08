<?php

namespace core;

use lib\route;

class thin
{
  public static function run()
  {
    $route = new route();
    $controller = $route->controller;
    $action = $route->action;

    $ctrl_class = '\\app\\controller\\'.$controller;
    $ctrl_obj = new $ctrl_class();
    $ctrl_obj->$action();
  }

  public static function autoload($class)
  {
    $class = str_replace('\\', '/', $class);
    require BASEPATH. '/' . $class .'.php';
  }
}
