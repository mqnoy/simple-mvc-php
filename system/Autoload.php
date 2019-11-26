<?php
namespace System\Core;

class Autoload{

    function __construct()
    {
        
        spl_autoload_register(function($class){
            $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
	        include_once $_SERVER['DOCUMENT_ROOT'] . '/class/' . $class . '.php';
        });
        

        
    }
    function class_loader($class)
    {
        
    }
}
