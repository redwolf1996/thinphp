<?php

function dump($value){
    echo "<pre>";
    if(is_object($value) || is_bool($value)){
        var_dump($value);
    }else{
        print_r($value);
    }
    echo "</pre>";
    echo "<br>";
}