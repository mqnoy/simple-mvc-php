<?php

class Autoload{

    function __construct()
    {
        
        spl_autoload_register(function($class){
	        include_once $class . '.php';
        });
        

        
    }
    function class_loader($class)
    {
        
    }
}
