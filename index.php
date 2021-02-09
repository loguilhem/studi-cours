<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * 1 - Rappel sur les booleans
 * 2 - Montrer un condition simple
 * 3 - Montrer que l'on test la "véracité" de la condition if(bool true == true) <=> if(bool true)
 * 4 - Montrer que l'on test la "véracité" de la condition if(!bool true == true) <=> if(false)
 * 5 - les différents opérateurs (<;>;<=;>=;==;<>
 * 6 - Montrer le === et le !=
 * 7 - Montrer le if, else, else if
 * 8 - Montrer le witch
 * 9 - Les && et || dans un if
 */

// 1, 2, 3, 4
$victory = false;
$supporterMood = null;

// 5
//$myMoney = 10000;
//$cart = 1000;

// 6
$myMoney = '1000';
$cart = 1000;

// 7 et 8
$animal = 'cds';

// 9
$age = 18;
$licence = false;

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
            <h1>Les conditions</h1>
            <h2>Résultat du match</h2>
            <?php
                if (false) {
                    $supporterMood = 'Happy';
                }
                if (true) {
                    $supporterMood = 'Sad';
                }
            ?>
            <div class="alert alert-success">Supporters are <?php echo $supporterMood; ?></div>
            <hr>
            <h2>Est-ce que je peux acheter les produits dans mon panier ?</h2>
            <?php
                if ($myMoney === $cart) {
                    echo '<div class="alert alert-success">Oui !</div>';
                } else {
                    echo '<div class="alert alert-danger">Non !</div>';
                }
            ?>
            <hr>
<!--            <h2>Que fait le --><?php //echo $animal; ?><!-- ?</h2>-->
<!--            --><?php
//            if ($animal == 'chat') {
//                echo '<div class="alert alert-success">Miaou</div>';
//            } elseif ($animal === 'chien') {
//                echo '<div class="alert alert-success">Ouaf</div>';
//            } elseif ($animal == 'vache') {
//                echo '<div class="alert alert-success">Meuh</div>';
//            } else {
//                echo '<div class="alert alert-warning">Inconnu</div>';
//            }
//            ?>
            <h2>Que fait le <?php echo $animal; ?> ?</h2>
            <?php
            switch ($animal) {
                case 'chat':
                    echo '<div class="alert alert-success">Miaou</div>';
                    break;
                case 'chien':
                    echo '<div class="alert alert-success">Ouaf</div>';
                    break;
                case 'vache':
                    echo '<div class="alert alert-success">Meuh</div>';
                    break;
                default:
                    echo '<div class="alert alert-warning">Inconnu</div>';
            }
            ?>
            <h2>Louer une voiture ?</h2>
            <?php
                if ($myMoney > 100 || ($age >= 18 && $licence)) {
                    echo 'oui';
                } else {
                    echo 'non';
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>
