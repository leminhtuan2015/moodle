<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 1:48 PM
 */


require_once(__DIR__.'/HomeController.php');

$action = 'index';
$controller = new HomeController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if($action == "index"){
    $controller->index();
} else if($action == "show"){
    $id = $_GET['id'];
    $controller->show($id);
}
?>
