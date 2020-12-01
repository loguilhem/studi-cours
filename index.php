<?php
ini_set('display_errors', 1);

include_once 'header.php';


?>

    <h1>Les design patterns</h1>

    <?php
        /* Singleton
        $flash = Flash::getInstance();
        $flash->printFlash();
        /* */

        /* Dependency Injection
        $flash = new FlashBag();
        $message = $flash->printFlash();
        if ($message != null) {
            echo '<span class="alert alert-'.$message[0].'">'.$message[1].'</span>';
        }

        /* */

        /* Factory
            $travel = TransportFactory::chooseTransportMode(3);
            echo $travel->travel();
            echo '<br>';
            echo $travel->getBrand();
        /* */

    ?>

<!--    <a href="action-success.php" class="btn btn-outline-primary">Ajouter un succès</a>-->
<!--    <a href="action-danger.php" class="btn btn-outline-danger">Ajouter une alerte</a>-->

<!--    <a href="add-user.php" class="btn btn-outline-dark">Ajouter un utilisateur</a>-->

<?php
    include_once "footer.php";
?>
