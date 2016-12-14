<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/14/16
 * Time: 8:26 AM
 */
class ApplicationController {
    public function index(){
        require_once($_SERVER['DOCUMENT_ROOT']."/moodle/ks/application/views/index.php");
    }

}