<?php

namespace lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = 'root';

        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $e){
            dump($e->getMessage());
            log::put($e->getMessage());
        }
    }

    public function _query($sql)
    {
        $rs = $this->query($sql);
        if(!$rs){
            log::put($this->errorinfo()[2]. PHP_EOL .$sql);
        }
        return $rs;
    }
}