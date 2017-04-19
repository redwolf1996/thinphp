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
        $ret = $model->query($sql);
        dump($ret->fetchAll());
    }

}