<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 9:25 AM
 */

require_once(__DIR__.'/CourseCategoryController.php');

$action = 'index';
$controller = new CourseCategoryController();

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