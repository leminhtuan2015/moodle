<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/13/16
 * Time: 11:26 AM
 */

require_once("../../config.php");
require_once($CFG->dirroot. '/course/lib.php');
require_once($CFG->libdir. '/coursecatlib.php');

class Course {

    public function all(){
        $courses = get_courses();

//        error_log(print_r("rggtg:hhhh ----------()", true));

        return $courses;
    }

    public function getByCategory($categoryid){
        $courses = get_courses($categoryid);

//        error_log(print_r("rggtg:hhhh ----------()", true));

        return $courses;
    }

}