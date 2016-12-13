<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/moodle/ks/shared/layout/menu.php');

foreach ($courses as $c) {
    echo "<li>$c->fullname </li>";
}