
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $car->getBrand() ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
               <?php echo $car->getCategory().' | '.$car->getPlace() ?>
            </h6>
            <p class="card-text">Il nous reste : <?php echo $car->getStock(); ?> véhicules de disponible.</p>
            <?php echo '<a href="../command/form-rent.php?car='.$car->getId().'" class="card-link">Louer</a>' ?>
        </div>
    </div>
</div>
