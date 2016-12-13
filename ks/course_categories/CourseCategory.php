<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 3:02 PM
 */

global $CFG;

require_once("../../config.php");
require_once($CFG->dirroot. '/course/lib.php');
require_once($CFG->libdir. '/coursecatlib.php');

class CourseCategory {
    public $id = 0;
    public $name = "root";
    public $childrent = array();

    public function get($parentId){
        global $DB;

        $data = $DB->get_records('course_categories', array('parent'=>$parentId), '', 'id, name');

        $courseCategories = array();

        foreach ($data as $d) {
            $c = new CourseCategory();
            $c->id = $d->id;
            $c->name = $d->name;

            array_push($courseCategories, $c);
        }

        return $courseCategories;
    }

    public function tree($courseCategoryRoot){
        $courseCategories = $this->get($courseCategoryRoot->id);

        if($courseCategories){
            foreach ($courseCategories as $courseCategory) {

                array_push($courseCategoryRoot->childrent, $courseCategory);

                $this->tree($courseCategory);
            }
        }

        $size = count($courseCategoryRoot->childrent);

        return $courseCategoryRoot;
    }
}