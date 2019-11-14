<?php
namespace App\Controller;

use system\core\Base_Controller;

class Home extends Base_Controller{

    private $m_home;
    private $l_example;
    function __construct()
    {
        $this->m_home = $this->model("Home");
        $this->l_example = $this->library("example");
    }
    function index(){

        $data['website']=array(
            'WEB_TITLE' => "THIS TITLE", 
            'WEB_DESC' => "THIS DESCRIPTION",
            'data_kelas ' => $this->m_home->readKelas()
        );

        //panggil library
        $this->l_example->writeMsg(
            "panggil library disini bisa!"
        );
        $this->view('home',$data);
    }
}