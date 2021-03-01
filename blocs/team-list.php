<?php

$members = getTeamates();

?>
<ul class="list-group">
    <?php
        foreach ($members as $member) {
            echo '<li class="list-group-item">'.$member.'</li>';
        }
    ?>
</ul>
