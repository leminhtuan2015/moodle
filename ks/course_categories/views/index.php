<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/12/16
 * Time: 4:03 PM
 */

function tree(&$courseCategory) {
    $size = count($courseCategory->childrent);

    if($size > 0){
        echo "<ul>";

        foreach ($courseCategory->childrent as $c) {
            echo "<li><a href=''>$c->name</a>";
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
        <li><a href="">Home</a>
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

        <li> <a href="#">Courses</a>
            <?php
                tree($courseCategoryRoot);
            ?>
        </li>

        <li><a href="#">About</a></li>
    </ul>
</div>