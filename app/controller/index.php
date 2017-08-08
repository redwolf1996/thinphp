<?php

namespace app\controller;

use lib\controller;

class index extends controller
{
    public function index()
    {
      $this->view('welcome', [

      ]);
    }
}
