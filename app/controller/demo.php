<?php

namespace app\controller;

use lib\controller;
use lib\db;

class demo extends controller
{
  public function action_foo(db $db)
  {
//    $db = new db();
    $bar = $db->query("SELECT * FROM `user`")->fetchAll();
    $bar = $bar ? $bar : '';

    $this->view('demo/default', [
      'foo' => 'this is foo variable',
      'bar' => $bar
    ]);
  }
}
