<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/13/16
 * Time: 11:40 AM
 */

require_once("Course.php");

class CourseController {
    public function index($categoryid="all"){
        $course = new Course();
        $courses = $course->getByCategory($categoryid);
//
//      error_log(print_r($c, true));

        require_once(__DIR__.'/views/index.php');
    }

}