<?php
namespace App\Controller;

use System\Core\Base_Controller;

class Test extends Base_Controller{

    function __construct()
    {
        
    }
    function index(){

        //panggil helper
        // echo  $this->base_url("namafilenya.php");
        echo "test controller";
    }
}