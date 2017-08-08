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

    $methods = self::getClassMethods($ctrl_class);
    foreach ($methods as $method){

    }

//    $ctrl_obj = new $ctrl_class();

//    $ctrl_obj = $class->newInstanceArgs();


//    $ctrl_obj->$action();
  }

  public static function autoload($class)
  {
    $class = str_replace('\\', '/', $class);
    require BASEPATH. '/' . $class .'.php';
  }

  // 根据反射类获取类方法
  public static function getClassMethods($class)
  {
    $class = new \ReflectionClass($class);
    $methods = $class->getMethods();
    $depend = [];
    foreach($methods as $method) {
      $depend[] = $method->getName();
    }
    return $depend;
  }

  // 根据反射方法获取方法内的参数
  public static function getMethodArgs($method)
  {
    $ReflectionFunc = new \ReflectionFunction($method);
    $depend = [];
    foreach ($ReflectionFunc->getParameters() as $value) {
      $depend[] = $value->name;
    }
    return $depend;
  }

  // 重新计算方法对应的参数
  public static function getFuncArgArrs()
  {

  }
}
