<?php

namespace System\Core;


class Dispatcher
{

    private $currentController = 'Home';
    private $currentMethod = 'index';
    private $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        echo "this url => ";
        var_dump($url);
        echo "<br>";
        if (file_exists("app/controller/" . ucwords($url[0]) . ".php")) {
            # code...
            echo "1 masuk sini  " . $this->currentController;
            echo "\n<br>";
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        //instansiasi class
        $this->currentController = "App\\Controller\\{$this->currentController}";
        $this->currentController = new  $this->currentController;

        if (isset($url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        var_dump($url);
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }


    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
