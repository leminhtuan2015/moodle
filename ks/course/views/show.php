<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <li><a href="javascript:void(0)" id="host" class="tablink" onclick="openCity(event, 'Sections');">Sections</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Activities');">Activities</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Documents');">Documents</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Chat');">Chat</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Posts');">Posts</a></li>
                <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Members');">Members</a></li>
            </ul>

            <div id="Sections" class="w3-container w3-border city">

                <div style="margin-top: 20px">
                    <div class="panel-group">
                        <?php foreach ($sections as $section) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo "$section->id" ?>"><?php echo "$section->name ($section->id)"?></a>
                                    </h4>
                                </div>


                                <div id="<?php echo "$section->id" ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php
                                            foreach ($section->modinfo->cms as $cms) {
                                                if ($cms->section == $section->id) {
                                                    if ($cms->content) {
                                                        echo "$cms->content";
                                                    }

                                                    if ($cms->url) {
                                                        echo "<li><a href='$cms->url' > - $cms->name </a> ($cms->section)</li>";
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <div id="Activities" class="w3-container w3-border city">
                <?php
//                    error_log(print_r($sections, true));

                    echo "<ul>";
//                    foreach ($sections as $section) {
                        $section = $sections[0];

                        echo "<li><h3>$section->name ($section->id)</h3></li>";

                        foreach ($section->modinfo->cms as $cms) {
                            if($cms->section == $section->id){

                                if($cms->url){
                                    echo "<ul><li> <a href='$cms->url' > - $cms->name </a> ($cms->section)<li></ul>";
                                }

                                if($cms->content){
                                    echo "<p> $cms->content</p>";
                                }
                            }
                        }
//                    }
                    echo "</ul>";
                ?>
            </div>

            <div id="Documents" class="w3-container w3-border city">
                <h2>Documents</h2>
                <p>Tokyo is the capital of Japan.</p>
            </div>

            <div id="Chat" class="w3-container w3-border city">
                <h2>Chat</h2>
                <p>Tokyo is the capital of Japan.</p>
            </div>

            <div id="Posts" class="w3-container w3-border city">
                <h2>Posts</h2>
                <p>Tokyo is the capital of Japan.</p>
            </div>

            <div id="Members" class="w3-container w3-border city">
                <?php
                    foreach ($enrolledUsers as $enrolledUser) {
                        echo "<li> <a href=../../user/profile.php?id=$enrolledUser->id>$enrolledUser->username ($enrolledUser->email)</a></li>";
                    }
                ?>
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

    document.getElementById('host').click();
</script>

