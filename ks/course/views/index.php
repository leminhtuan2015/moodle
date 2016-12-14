<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<div align="center" style="margin-top: 20px">
    <div align="left" style="width: 960px">
        <?php
            foreach ($courses as $c) {
                echo "<h3><li><a href='../course/?action=show&id=$c->id'>$c->fullname</a></li></h3>";
            }
        ?>
    </div>
</div>
