<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';

$driver = new \Model\Driver('M', 'Voiture');
$client = new \Model\Client('Mme');
$vehicle = new \Model\Vehicle('156cd', true);


?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php
                $vehicle->showTooltip();
            ?>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
