<?php

class Autoload{

    function __construct()
    {
        
        spl_autoload_register($this->controller_loader);
        

        
    }
    function controller_loader($class)
    {
        include_once "app/controller/{$class}". '.php';
    }
    function model_loader($class)
    {
        include_once "app/model/{$class}". '.php';
    }
    function library_loader($class){
        include_once "app/library/{$class}". '.php';
    }
    function system_loader($class){
        include_once "system/core/{$class}". '.php';
    }
}
