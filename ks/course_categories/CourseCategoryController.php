<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 3:41 PM
 */

require_once(__DIR__.'/CourseCategory.php');

class CourseCategoryController {
    public function index(){
        $courseCategoryRoot = new CourseCategory();

        $courseCategoryRoot = $courseCategoryRoot->tree($courseCategoryRoot);

        $size = count($courseCategoryRoot->childrent);

//        foreach ($courseCategoryRoot->childrent as $c) {
//            echo "xxxx111 : $c->id <br>";
//        }

        require_once(__DIR__.'/views/index.php');
    }
}