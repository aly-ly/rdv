<?php
function __autoload($class){
    if(file_exists($class.'.php')){
        require_once($class.'.php');
        return true;
    }
   return false;
}