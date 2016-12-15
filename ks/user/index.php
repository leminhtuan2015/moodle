<div style="width: 800px">

<?php

require('../../config.php');
require_once("$CFG->dirroot/user/files_form.php");
require_once("$CFG->dirroot/repository/lib.php");

$returnurl = optional_param('returnurl', '', PARAM_LOCALURL);

if (empty($returnurl)) {
    $returnurl = new moodle_url('/user/files.php');
}

$context = context_user::instance($USER->id);
require_capability('moodle/user:manageownfiles', $context);

$title = get_string('privatefiles');
$struser = get_string('user');

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

$mform = new user_files_form(null, array('data' => $data, 'options' => $options));

echo $OUTPUT->header();
echo $OUTPUT->box_start('generalbox');

//error_log(print_r($data, true));

$mform->display();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();
?>

</div>