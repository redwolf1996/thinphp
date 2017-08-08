<?php

/** global functions */

function dd($value){
  echo "<pre>";
  if(is_object($value) || is_bool($value)){
    var_dump($value);
  }else{
    print_r($value);
  }
  echo "</pre>";
  echo "<br>";
  die();
}

function config($name){
  $config = require BASEPATH .'/config.php';
  return $config[$name];
}
