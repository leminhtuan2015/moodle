<?php

require_once(__DIR__.'/../../course_categories/CourseCategory.php');

$courseCategoryRoot = new CourseCategory();
$courseCategoryRoot = $courseCategoryRoot->tree($courseCategoryRoot);

?>

<?php

function tree(&$courseCategory) {
    $size = count($courseCategory->childrent);

    if($size > 0){
        echo "<ul>";

        foreach ($courseCategory->childrent as $c) {
            echo "<li><a href='../course?categoryId=$c->id'> $c->name </a>";
            tree($c);
            echo "</li>";
        }

        echo "</ul>";
    }
}
?>

<link rel="stylesheet" href="../resources/css/style.css" type="text/css" media="screen">

<div class="example">
    <ul id="nav">
        <li><a href="../home">Home</a>
            <ul>
                <li><a href="#">HTML / CSS</a></li>
                <li><a href="#">JS / jQuery</a>
                    <ul>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">JS</a></li>
                    </ul>
                </li>
                <li><a href="#">MySQL</a></li>
                <li><a href="#">XSLT</a></li>
                <li><a href="#">Ajax</a></li>
            </ul>
        </li>

        <li> <a href="../course">Courses</a>
            <?php
            tree($courseCategoryRoot);
            ?>
        </li>

        <li><a href="../home">About</a></li>
    </ul>
</div>