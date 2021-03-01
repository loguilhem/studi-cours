<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>A propos de l'équipe</h1>
            <p>On est les meilleurs !</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis eros a odio pulvinar euismod. Vestibulum eu risus porta, sodales justo in, ullamcorper est. Nullam urna magna, ornare ultrices nisi sit amet, elementum hendrerit augue. Duis at ante mollis, accumsan turpis eu, lobortis mauris. Vivamus eleifend at purus non rhoncus. Sed ut lectus tempor, finibus leo nec, varius magna. Sed interdum lobortis dolor, eget rhoncus enim.

                Sed aliquam tellus nec lacus tempor, vitae bibendum mi consequat. Ut non dolor ligula. Vestibulum tempus suscipit varius. Curabitur ut luctus sem. Phasellus cursus venenatis tincidunt. Sed vel tellus gravida, sollicitudin ex ut, fringilla nibh. Sed scelerisque posuere vestibulum. Etiam lobortis erat et sapien tempus maximus. Quisque enim est, interdum et sodales et, luctus quis risus. Morbi ultricies augue nec fringilla mollis. Sed ut facilisis odio, a dapibus dui.
            </p>
            <?php
                include_once '../blocs/team-list.php';
            ?>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
