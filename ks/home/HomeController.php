<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 2:10 PM
 */

class HomeController {
    public function index(){
        require_once(__DIR__.'/views/index.php');
    }

    public function show($id){
        echo "show: $id";
    }
}
?>