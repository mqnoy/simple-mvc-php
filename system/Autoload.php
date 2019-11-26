<?php
namespace System\Core;

class Autoload{

    function __construct()
    {
        
        spl_autoload_register(function($class){
            $call_class = str_replace("\\","/",$class);
            // $replace_slash = str_replace("\\","/",$class);
            // $location_class = str_replace(__CLASS__,"",$replace_slash);
            // $call_class = $location_class."".__CLASS__;

            // include_once strtolower($call_class).".php";
        });
        

        
    }
    function class_loader($class)
    {
        
    }
}
