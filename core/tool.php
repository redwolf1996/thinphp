<?php

function dump($value){
    if(is_object($value)){
        var_dump($value);
    }else{
        print_r($value);
    }
    echo '<br>';
}