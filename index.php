<?php


use Driver\Driver;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/data.php';

$driver = new Driver('John Connor', true);

$vehicle = new \Vehicle\Vehicle($driver);
$vehicle
    ->setBrand('Toyota')
    ->setIsAvailable(true)
    ->setNbPlace(4)
    ;
?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php
                echo $vehicle->getDriverName();
                echo '<br>';
            echo $vehicle->getDriver()->getName();
            ?>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
