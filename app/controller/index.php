<?php

namespace app\controller;

use lib\db;

class index
{
    public function __construct()
    {

    }

    public function index()
    {
        $model = new db();
        $sql = "SELECT * FROM `user`";
        $ret = $model->_query($sql);
        if($ret){
            dump($ret->fetchAll());
        }
    }
}
