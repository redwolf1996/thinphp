<?php

namespace lib;

class log
{
  public static function put($log)
  {
    $log_file = BASEPATH.'/log/'.date('Y-m-d').'.txt';
    $log = date('Y-m-d H:i:s') ." ------------------------------\n". $log . "\n\n";

    @file_put_contents($log_file, $log, FILE_APPEND);
  }
}
