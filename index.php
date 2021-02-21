<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// 0 - créer le tableau des joueurs
// 1 - utiliser la fonction rand directement sur chaque jouer et montrer les résultats au chargement de page
// 2 - faire une fonction qu'on appelle où on veut afficher les résultats
// 3 - faire une autre fonction pour voir le plus haut score avec un max sur le tableau directement, appeler generateDices dedans
// 4 - mettre de la logique dans la fonction whoIsTheWinner pour récupérer
// 5 - montrer une fonction qui retourne rien vs une qui retourne avec l'exemple du prénom nom
// 6 - fonction récursive avec doNothingUntilWins
// 7 - anonyme avec le 'M.'
// 8 - exemple de callback
// 9 - exemple de référence en php avec &

$bet = 100;
$gamblers = [
    'Jean' => 0,
    'Pierre' => 0,
    'Paul' => 0,
];

function generateDices($gamblers)
{
    foreach ($gamblers as $name => $gambler) {
        $gamblers[$name] = rand(1,6);
    }

    return $gamblers;
}

function whoIsTheWinner($gamblers)
{
    $values = generateDices($gamblers);
    asort($values);

    return key($values);
}

$firstname = 'Bob';
$lastname = 'Marley';

function fullname(string $firstname, string $lastname): string
{
    return $firstname. ' '.$lastname;
}

$i=0;
function doNothingUntilWins(?int $i)
{
    $rand = rand(0, 10);
    if ($rand === 10) {
        echo "WINS in $i times";
    } else {
        $i++;
        doNothingUntilWins($i);
    }
}

$products = [
    'lait' => 5,
    'viande' => 25,
    'légumes' => 7,
    'jeu' => 17
];

function calculTotal(array $products, float $tax)
{
    $total = 0;
    $calculate = function ($totalPerProduct) use (&$total, $tax) {
        $price = $totalPerProduct*$tax + $totalPerProduct;
        $total = $total + $price;

    };
    array_walk($products, $calculate);

    return $total;
}

?>

<html lang="fr">
<head>
    <title>Les fonctions</title>
    <meta charset="UTF-8">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Les fonctions</h1>
            <?php
              echo 'le gagnant est : '. whoIsTheWinner($gamblers);
              echo '<br>';
            echo '<br>';
              $fullname = fullname($firstname, $lastname);
              echo $fullname;
            echo '<br>';
            echo '<br>';
            doNothingUntilWins($i);
            echo '<br>';
            echo '<br>';

            $respect = function () use ($fullname) {
                return 'M. '.$fullname;
            };
            echo $respect();
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
           echo calculTotal($products, 0.2)

            ?>
        </div>
    </div>
</div>
</body>
</html>
