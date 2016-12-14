<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/14/16
 * Time: 10:50 PM
 */


//foreach ($mycourses as $mycourse) {
//    echo "$mycourse->fullname";
//}

?>

<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<div align="center" style="margin-top: 20px">
    <div align="left" style="width: 960px">
        <?php

            foreach ($mycourses as $mycourse) {
                echo "<h3><li><a href='../course/?action=show&id=$mycourse->id'>$mycourse->fullname</a></li></h3>";
            }
        ?>
</div>
</div>