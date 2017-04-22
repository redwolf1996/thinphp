<?php

namespace app\controller;

class demo extends controller
{
    public function __construct()
    {
        parent::__construct();
    }

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
