<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 9:25 AM
 */

require_once(__DIR__.'/CourseController.php');

$action = 'index';
$controller = new CourseController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if($action == "index"){
    $categoryid = "all";
    $categoryid = $_GET['categoryId'];

    $controller->index($categoryid);
} else if($action == "show"){
    $id = $_GET['id'];
    $controller->show($id);
}
?>
