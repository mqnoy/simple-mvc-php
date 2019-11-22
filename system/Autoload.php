<?php
namespace System\Core;

class Autoload{

    function __construct()
    {
        
        /*spl_autoload_register(function($class){
            // echo "Calling" . __FUNCTION__ . " in " . __CLASS__ . "\n<br/>";
            echo "this var class in autooad => $class";
            include_once "{$class}.php";
        });*/
        spl_autoload_register(function($class){
            // echo "Calling" . __FUNCTION__ . " in " . __CLASS__ . "\n<br/>";
            echo "this var class in autooad => $class";
            $filename=$class.".php";
            $file = ROOT .''.$filename;
            if (!is_readable($file)) {
                # code...
                return false;
            }
            include_once $file;
        });

        
    }
    function class_loader($class)
    {
        
    }
}
