<?php
/**
 * Created by PhpStorm.
 * User: leminhtuan
 * Date: 12/13/16
 * Time: 2:00 PM
 */

require_once($_SERVER['DOCUMENT_ROOT'].'/moodle/ks/shared/layout/menu.php');


//error_log(print_r($sections, true));

?>



<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
    .city {display:none;}
</style>
<body>

<div align="center">
    <div style="width:960px; margin-top: 20px">
        <div class="w3-container" align="left">
            <h2>Course: <?php echo $course->fullname ?> </h2>

            <ul class="w3-navbar w3-black">
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'London');">Sections</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Paris');">Activities</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Tokyo');">Documents</a></li>
            </ul>

            <div id="London" class="w3-container w3-border city">
                <?php
                    foreach ($sections as $section) {
                        echo "<li> $section->name ($section->id)</li>";
                    }
                ?>
            </div>

            <div id="Paris" class="w3-container w3-border city">
                <?php
                error_log(print_r($sections, true));

                echo "<ul>";
                foreach ($sections as $section) {
                    echo "<li><h3>$section->name ($section->id)</h3></li>";

                    foreach ($section->modinfo->cms as $cms) {
                        if($cms->section == $section->id){
                            echo "<ul><li> - $cms->name ($cms->section)<li></ul>";
                        }
                    }
                }
                echo "</ul>";
                ?>
            </div>

            <div id="Tokyo" class="w3-container w3-border city">
                <h2>Tokyo</h2>
                <p>Tokyo is the capital of Japan.</p>
            </div>
        </div>
    </div>
</div>



<script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }
</script>

