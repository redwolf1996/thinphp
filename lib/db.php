<?php

namespace lib;

class db extends \PDO
{
    public function __construct()
    {
        $dsn = config('db')['dsn'];
        $username = config('db')['username'];
        $passwd = config('db')['passwd'];

        try{
            parent::__construct($dsn, $username, $passwd);
            $this->charset(config('db')['charset']);
        }catch (\PDOException $e){
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

    private function charset($char)
    {
        $this->exec('set names '. $char);
    }
}
