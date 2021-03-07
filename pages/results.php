<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';

$results = getResults($_GET['items']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Votre recherche</h1>
            <p>
                <?php echo $results ?>
            </p>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>

