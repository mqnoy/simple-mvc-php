<?php

class Autoload{

    function __construct()
    {
        
        

        
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
spl_autoload_register('system_loader');
spl_autoload_register('controller_loader');
spl_autoload_register('model_loader');
spl_autoload_register('library_loader');
