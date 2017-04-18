<?php

namespace core;

class route
{
    public $controller;
    public $action;

    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if(isset($uri) && $uri !== '/'){
            $patharr = explode('/', trim($uri, '/'));
            if(isset($patharr[0])){
                $this->controller = $patharr[0];
            }

            if(isset($patharr[1])){
                $this->action = $patharr[1];
            }else{
                $this->action = 'index';
            }
        }else{
            $this->controller = 'index';
            $this->action = 'index';
        }
        dump($this->action);
        dump($this->controller);
    }
}