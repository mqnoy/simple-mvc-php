<?php

class Base_Controller
{

    function view($view,$data=[])
    {
        $file = "app/view/{$view}.php";
        //chec keberadaan file
        if (file_exists($file)) {
            require_once $file;
        } else {
            echo  $file . " tidak di temukan";
        }
    }
    function model($model)
    {
        $class = ucwords($model);
        //namespace\namaclass
        $model = "App\\Model\\" . $class;
        
        //check nama classnya ada atau tidak
        if (class_exists($model)) {
            return new $model; //instansiasi class
        } else {
            echo $model, "tidak di temukan";
        }
    }
    function library($lib){
        $class = ucwords($lib);
        //namespace\namaclass
        $library = "App\\Library\\" . $class;
        
        //check nama classnya ada atau tidak
        if (class_exists($library)) {
            return new $library; //instansiasi class
        } else {
            echo $library, "tidak di temukan";
        }
    }

    function helper($help){
        $helper = ucwords($help);
        $file = "app/helper/{$helper}.php";
        //chec keberadaan file
        if (file_exists($file)) {
            require_once $file;
        } else {
            echo  $file . " tidak di temukan";
        }
    }

    
}
