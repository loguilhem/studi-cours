<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// 4 types de boucles :
/*
 * while
 * foreach
 * for
 * do while
 */
// 0 - une boucle for
// 1 - la boucle for avec les parts de tarte avec la condition pour le pluriel

$nbSlice = 12;

// 2 - la boucle while avec le réservoir de la voiture
$gasTank = 60;
$gasTankLevel = 0;

// 3 - la boucle do while avec la dépense d'argent vs while
$money = 100;
$productPrice = 12;

// 4 - La boucle foreach avec le tableau des artistes
$bob = [
    'name' => 'Marley',
    'style' => 'reggae',
    'alive' => false,
];

$david = [
    'name' => 'Bowie',
    'style' => 'pop',
    'alive' => false,
];

$elton = [
    'name' => 'John',
    'style' => 'pop',
    'alive' => true,
];

$artists = [$bob, $david, $elton];

?>

<html lang="fr">
<head>
    <title>Les boucles</title>
    <meta charset="UTF-8">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Les boucles</h1>
            <?php
            for ($i = 0; $i <= 10; $i++) {
                echo 'Mon compteur est à '.$i.'<br>';
            }
            ?>
            <?php
                for ($slice = 1; $slice <= $nbSlice; $slice++) {
                    if ($slice === 1) {
                        echo 'Je mange une part ! J\'ai mangé '.$slice.' part de tarte<br>';
                    } else {
                        echo 'Je mange une part ! J\'ai mangé '.$slice.' parts de tarte<br>';
                    }
                }
            ?>

            <?php
                while ($gasTankLevel < $gasTank) {
                    $gasTankLevel++;
                    $toFill = $gasTank-$gasTankLevel;
                    echo 'J\'ajoute un 1L dans mon réservoir, il me reste '. $toFill .'L à remplir<br>';
                }
                echo "Mon réservoir est plein !";
            ?>

            <?php
            while ($money > 0) {
                echo 'J\'achète un produit, il me rester '. $money .'€ dans mon porte-monnaie<br>';
                $money -= $productPrice;
            }
            do {
                echo 'J\'achète un produit, il me rester '. $money .'€ dans mon porte-monnaie<br>';
                $money -= $productPrice;
            }
            while ($money > 0)
            ?>

            <?php
                foreach ($artists as $artist) {
                    echo $artist['name'] . ' peut-il faire un concert de '.$artist['style']. ' ? ';
                    echo $artist['alive'] ? 'OUI' : 'NON';
                    echo '<br>';
                }

                echo '<table class="table table-responsive">';
                foreach ($artists as $artist) {
                    foreach ($artist as $key => $value) {
                        if ($value) {
                            echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                        }
                    }
                }
                echo '</table>';
            ?>

        </div>
    </div>
</div>
</body>
</html>
