<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/*
 * include vs require : require génère une erreur fatatle et stoppe le script si le fichier manque, alors que inclu va continuer le script et afficher une erreur.
 */

include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Organiser ses fichiers en PHP</h1>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
