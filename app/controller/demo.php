<?php

namespace app\controller;

use lib\controller;

class demo extends controller
{
    public function test1()
    {
        $this->view('index');
    }

    public function test2()
    {
        $this->view('index/test', [
            'aaa'=>'111',
            'bbb'=>'222'
        ]);
    }
}
