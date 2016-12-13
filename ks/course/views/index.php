<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/moodle/ks/shared/layout/menu.php');

echo "COURSES";
echo "<hr>";

foreach ($courses as $c) {
    echo "<li><a href='../course/?action=show&id=$c->id'>$c->fullname</a></li>";
}