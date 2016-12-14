<?php

require('../../config.php');
require_once("$CFG->dirroot/user/files_form.php");
require_once("$CFG->dirroot/repository/lib.php");




require_login();
if (isguestuser()) {
    die();
}

$returnurl = optional_param('returnurl', '', PARAM_LOCALURL);

if (empty($returnurl)) {
    $returnurl = new moodle_url('/user/files.php');
}

$context = context_user::instance($USER->id);
require_capability('moodle/user:manageownfiles', $context);

$title = get_string('privatefiles');
$struser = get_string('user');

$PAGE->set_url('/user/files.php');
$PAGE->set_context($context);
$PAGE->set_title($title);
$PAGE->set_heading(fullname($USER));
$PAGE->set_pagelayout('mydashboard');
$PAGE->set_pagetype('user-files');

$maxbytes = $CFG->userquota;
$maxareabytes = $CFG->userquota;
if (has_capability('moodle/user:ignoreuserquota', $context)) {
    $maxbytes = USER_CAN_IGNORE_FILE_SIZE_LIMITS;
    $maxareabytes = FILE_AREA_MAX_BYTES_UNLIMITED;
}

$data = new stdClass();
$data->returnurl = $returnurl;
$options = array('subdirs' => 1, 'maxbytes' => $maxbytes, 'maxfiles' => -1, 'accepted_types' => '*',
    'areamaxbytes' => $maxareabytes);
file_prepare_standard_filemanager($data, 'files', $options, $context, 'user', 'private', 0);

// Attempt to generate an inbound message address to support e-mail to private files.
$generator = new \core\message\inbound\address_manager();
$generator->set_handler('\core\message\inbound\private_files_handler');
$generator->set_data(-1);
$data->emaillink = $generator->generate($USER->id);

$mform = new user_files_form(null, array('data' => $data, 'options' => $options));

if ($mform->is_cancelled()) {
    redirect($returnurl);
} else if ($formdata = $mform->get_data()) {
    $formdata = file_postupdate_standard_filemanager($formdata, 'files', $options, $context, 'user', 'private', 0);
    redirect($returnurl);
}

echo $OUTPUT->header();
echo $OUTPUT->box_start('generalbox');


$mform->display();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();

//error_log(print_r($OUTPUT->footer(), true));