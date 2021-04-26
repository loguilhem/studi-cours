<?php

use factory\TransportFactory;
use injection\FlashBag;
use singleton\Flash;

ini_set('display_errors', 'on');
error_reporting(E_ALL);

include_once 'header.php';

/**
 * 1 - Singleton : utiliser l'ajout de l'utilisateur
 * 2 - Dependency injection : meme chose avec l'injection de dépendance
 * 3 - Factory
 * 4 - Observer
 */

?>

    <h1>Les design patterns</h1>

<!--    <a class="btn btn-primary" href="add-user.php">Ajouter un User</a>-->

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

        /* Observer
        $date1 = (new DateTime('now'))->sub(new DateInterval('P1D')); //faire un add pour ne pas avoir l'expiration

        $client = new \observer\Client($date1);

        $alterAbo = new \observer\AbonnementAlert();
        $client->attach($alterAbo);
        // on a un seul observateur
        $client->checkDateAbonnement();

//        $client->detach($alterAbo); //a commenter ou non pour avoir 1 ou deux observeur en meme temps

        $thankAbo = new \observer\AbonnementThanks();
        $client->attach($thankAbo);

        // on a deux observateurs
        $client->updateDateAbonnement(new DateTime('now'));
        /* */

    ?>

<!--    <a href="action-success.php" class="btn btn-outline-primary">Ajouter un succès</a>-->
<!--    <a href="action-danger.php" class="btn btn-outline-danger">Ajouter une alerte</a>-->

<!--    <a href="add-user.php" class="btn btn-outline-dark">Ajouter un utilisateur</a>-->

<?php
    include_once "footer.php";
?>
