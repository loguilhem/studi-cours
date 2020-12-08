<?php
    include_once '../header.php';

    $controller = new CarController();
?>



<div class="row justify-content-center">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Catégorie</th>
            <th>Nombre de place</th>
            <th>Stock</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php

            foreach ($controller->listCars() as $car) {
                echo '<tr>';
                echo '<td>'.$car->getCategory().'</td>';
                echo '<td>'.$car->getPlace().'</td>';
                echo '<td>'.$car->getStock().'</td>';
                echo '<td><a class="btn btn-sm btn-secondary" href="/Vue/car/car-description.php?car='.$car->getId().'">Voir</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</div>

