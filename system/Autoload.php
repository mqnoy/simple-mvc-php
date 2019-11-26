<?php
namespace System\Core;

class Autoload{

    //class directories
    private $directorys = array(
        'config/',
        'classes/otherclasses/',
        'classes2/',
        'module1/classes/'
    );

    function __construct()
    {
        
        spl_autoload_register(function ($className) {
            $className = ltrim($className, '\\');
            $fileName = '';
            $namespace = '';
            if ($lastNsPos = strripos($className, '\\')) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName = __DIR__ . DIRECTORY_SEPARATOR . $fileName . $className . '.php';
            if (file_exists($fileName)) {
                require $fileName;
                return true;
            }
            return false;
        });

        
    }
    function class_loader($class)
    {
        
    }
}
