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
        $db = new db();
        $sql = "SELECT * FROM `user`";
        $ret = $db->query($sql);
        if($ret){
            dump($ret->fetchAll());
        }
    }
}
