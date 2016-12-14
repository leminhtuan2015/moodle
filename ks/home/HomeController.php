<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 2:10 PM
 */

require_once("../application/ApplicationController.php");

class HomeController extends ApplicationController {
    public function index(){
        parent::menu();

        require_once(__DIR__.'/views/index.php');
    }

    public function show($id){
        echo "show: $id";
    }
}
?>