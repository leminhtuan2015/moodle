<?php
require_once(__DIR__.'/../../course_categories/CourseCategory.php');

$courseCategoryRoot = new CourseCategory();
$courseCategoryRoot = $courseCategoryRoot->tree($courseCategoryRoot);
?>

<?php

function tree(&$courseCategory) {
    $size = count($courseCategory->childrent);

    error_log(print_r($size, true));

    if($size > 0){
        foreach ($courseCategory->childrent as $c) {
            echo "<li ><a href='../course?categoryId=$c->id'> $c->name </a>";
                echo "<ul class=\"sub-menu\">";
                    tree($c);
                echo "</ul>";
            echo "</li>";
        }
    }
}
?>

<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>KSClass</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/menu.css">

    <script type="text/javascript" src="../resources/js/jquery.js"></script>
    <script type="text/javascript" src="../resources/js/function.js"></script>

</head>
<body>
<div id="wrap">
    <header>
        <div class="inner relative">
            <a class="logo" href=""><img src="../resources/images/logo.png" alt="fresh design web"></a>
            <a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
            <nav id="navigation">
                <ul id="main-menu">
                    <li class="current-menu-item"><a href="">Home</a></li>
                    <li class="parent">
                        <a href="">Category</a>
                        <ul class="sub-menu">


                            <?php tree($courseCategoryRoot) ?>
                        </ul>
                    </li>
                    <li><a href="">Portfolio</a></li>
                    <li class="parent">
                        <a href="">More</a>
                        <ul class="sub-menu">
                            <li><a href=""><i class="icon-user"></i>Profile</a></li>
                            <li><a href=""><i class="icon-wrench"></i>Setting</a></li>

                            <?php if(isloggedin()) { ?>
                                <li><a href="../../login/logout.php"><i class="icon-angle-right"></i>Logout</a></li>
                            <?php } else { ?>
                                <li><a href=""><i class="icon-angle-left"></i>Login</a></li>
                            <?php }?>

                            <li>
                                <a class="parent" href="#"><i class="icon-file-alt"></i> Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="">Full Width</a></li>
                                    <li><a href="">Left Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
</div>
</body></html>