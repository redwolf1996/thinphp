<?php

namespace lib;

class route
{
  public $controller;
  public $action;

  public function __construct()
  {
    $uri = $_SERVER['REQUEST_URI'];
    $patharr = explode('/', trim($uri, '/'));

    if(isset($patharr[0]) && $patharr[0] !== ''){
      $this->controller = $patharr[0];
    }else{
      $this->controller = 'index';
    }

    if(isset($patharr[1])){
      $this->action = $patharr[1];
    }else{
      $this->action = 'index';
    }
  }
}
