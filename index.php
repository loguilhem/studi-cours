<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');
/* ici si on met 1 à la place 'on', ca pète en strict type car la fonction attend un string */

// 1 - Créer des variables et les afficher
// 2 - Modifier la valeur et l'afficher
// 3 - Créer des constantes et les afficher
// 4 - Tenter de modifier la valeur de la constante
// 5 - Les différents type de variable : int, float, string, array, bool
// 6 - créer un int et l'afficher
// 7 - créer un float et l'afficher
// 8 - multiplier float par int
// 9 - remplacer le float en string et montrer que ca marche car PHP n'est pas fortement typé
// 10 - mettre declare(strict_types = 1); en haut du fichier
// 11 - erreur si 1 à la place de 'on' dans init_st, créer la fonction echo price (float-string)
// 12 - caster le string price en float puis int et montrer avec des var_dump
// 13 - créer un boolean et l'utiliser dans une condition
// 13 - montrer les incrémentations

$lastName = 'Anderson';
const FIRSTNAME = 'Rita';

$nbChildren = 6;
$nbDiscSold = 200000000;
$unitPriceDisc = '12.60';

//var_dump($unitPriceDisc);
//var_dump((int)$unitPriceDisc);

$fortune = $nbDiscSold/$unitPriceDisc;

?>

<html lang="fr">
    <head>
        <title>Ma première page web</title>
        <meta charset="UTF-8">
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Les variables et les constantes</h1>
                    <p>Avant de d'épouser Bob, le nom de jeune fille de <?php echo FIRSTNAME; ?> était : <?php echo $lastName; ?></p>
                    <?php $lastName = 'Marley'; ?>
                    <p>Puis elle pris le nom de <?php echo $lastName; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <?php
                        echo 'ensemble, ils on eu '.$nbChildren.' enfants';
                        echo '<br>';
                        echo 'Bob a vendu '.$nbDiscSold.' albums';
                        echo '<br>';
                        echo 'Il a donc amassé '.$fortune.' $';
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';

                        $rich = true;
                        var_dump($rich);
                        if (!$rich) {
                            echo 'Bob était riche ';
                        } else {
                            echo 'Bob était pauvre';
                        }

                        $ourFortune = 1;
//                        for ($i = 0; $i < 50; $i++) {
//                            echo $i.' ';
//                            //$ourFortune += 1; //$ourFortune++;
////                            $ourFortune = $ourFortune*2;
//                            $ourFortune += $ourFortune;
//                            echo $ourFortune;
//                            echo '<br>';
//                        }

                        // Pour montrer l'importance du typage
                        function printPrice(float $price) {
                            echo 'prix du disc : '. $price.' €';
                        }
                        echo printPrice($unitPriceDisc);

                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-6">

                </div>
            </div>
        </div>
    </body>
</html>
