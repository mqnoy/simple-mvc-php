<?php
namespace System\Core;

class Autoload{

    function __construct()
    {
        spl_autoload_register(function($class){
            // echo "Calling" . __FUNCTION__ . " in " . __CLASS__ . "\n<br/>";
            include_once "{$class}.php";
        });

        
    }
}
