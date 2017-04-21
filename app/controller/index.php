<?php

namespace app\controller;

use lib\model;

class index
{
    public function __construct()
    {

    }

    public function index()
    {
        $model = new model();
        $sql = "SELECT * FROM `user`";
        $ret = $model->_query($sql);
        if($ret){
            dump($ret->fetchAll());
        }
    }
}
