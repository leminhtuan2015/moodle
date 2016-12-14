<?php

/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/13/16
 * Time: 11:40 AM
 */

global $CFG;

require_once("../../config.php");
require_once($CFG->dirroot. '/course/lib.php');
require_once($CFG->libdir. '/coursecatlib.php');
require_once("../application/ApplicationController.php");

class CourseController extends ApplicationController {
    public function index($categoryid="all") {
        parent::index();

        $courses = get_courses($categoryid);
        require_once(__DIR__.'/views/index.php');
    }

    public function show($id) {
        global $DB;

        $params = array('id' => $id);
        $course = $DB->get_record('course', $params, '*', MUST_EXIST);

        $modinfo = get_fast_modinfo($course);
        $modnames = get_module_types_names();
        $modnamesplural = get_module_types_names(true);
        $modnamesused = $modinfo->get_used_module_names();
        $mods = $modinfo->get_cms();
        $sections = $modinfo->get_section_info_all();

//        error_log(print_r($sections, true));

        require_login();

        require_once(__DIR__.'/views/show.php');
    }

}