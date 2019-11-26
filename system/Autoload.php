<?php
namespace System\Core;

class Autoload{

    function __construct()
    {
        
        spl_autoload_register(function($class){
            // echo "Calling" . __FUNCTION__ . " in " . __CLASS__ . "\n<br/>";
            echo "this var class in autooad => $class";
            $newclass = str_replace("\\","/",$class);
            include_once ucwords($newclass).".php";
        });
        

        
    }
    function class_loader($class)
    {
        
    }
}
