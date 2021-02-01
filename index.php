<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/**
 * 1 - Créer un tableau avec array et []
 * 2 - Montrer que l'on peut y mettre ce qu'on veut
 * 3 - Montrer comment parcourir un tableau
 * 4 - Montrer que les clés sont autogénérees
 * 5 - Montrer comment générés des clés, cf les artistes
 * 6 - Montrer comment modifier une valeur grâce à sa clé
 * 7 - Montrer comment ajouter une valeur via la clé ou via array push
 * 8 - Montrer array merge, cf les fruits
 * 9 - Montrer in_array
 * 10 - Montrer array-column cf les artistes
 * 11 - Montrer implode avec firstnames
 * 12 - Montrer explode avec une liste de sport
 * 13 - Montrer array unique, asort sur sports
 * 14 - Montrer le système de référence : @see https://blog.penjee.com/wp-content/uploads/2015/02/pass-by-reference-vs-pass-by-value-animation.gif
 *
 */

$myArray = [];
$myArrayJr = array();

$nawak = [
    'string',
    1,
    1.05,
    true,
    [
        100,
        'string2',
        'coucou'
    ]
];

$nawak[0] = 'ma super cool string';

$artists = [
    [
        'firstName' => 'Bob',
        'lastName' => 'Marley',
        'style' => 'Reggae'
    ],
    [
        'firstName' => 'Freddy',
        'lastName' => 'Mercury',
        'style' => 'Rock'
    ],
    [
        'firstName' => 'Robert',
        'lastName' => 'Clegg',
        'style' => 'Pop Zulu'
    ],
];

$firstnames = array_column($artists, 'firstName');
$firstnamesString = implode('-', $firstnames);

$artists[2]['firstName'] = 'Johnny';

$cindy = ['firstName' =>  'Cindy', 'lastName' => 'Lauper', 'style' => 'Pop'];
//$artists[3] = $cindy;
array_push($artists, $cindy);

$fruits = ['Banana', 'Tomato', 'Pineapple'];
$vegetables = ['Avocado', 'Lettuce', 'Onion'];

if (!in_array('Pepper', $vegetables)) {
    array_push($vegetables, 'Pepper');
}

$sports = 'football-rugby-basketball-handball-waterpolo-football';
$sportArray = explode('-',$sports);
asort($sportArray, SORT_REGULAR);

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
                    <h1>Les tableaux</h1>
                    <table class="table table-bordered table-striped">
                        <?php
                        foreach ($nawak as $key => $item) {
                            if (is_array($item)) {
                                foreach ($item as $k => $i) {
                                    echo '<tr><td>'.$k.'</td><td>'.$i.'</td></tr>';
                                }
                            } else {
                                echo '<tr><td>'.$key.'</td><td>'.$item.'</td></tr>';

                            }
                        }
                        ?>
                    </table>
                    <h2>Les artistes</h2>
                    <table class="table table-bordered table-striped">
                        <?php
                        foreach ($artists as $artist) {
                            echo '<tr>';
                            foreach ($artist as $key => $value) {
                                echo '<td>'.$key.'</td><td>'.$value.'</td>';
                            }
                            echo '</tr>';
                        }
                        ?>
                    </table>
                    <p>
                        Les prénoms des artistes sont : <?php echo $firstnamesString; ?>
                    </p>
                    <h2>Les courses</h2>
                    <table class="table table-bordered table-striped">
                        <?php
                            foreach (array_merge($fruits, $vegetables) as $item) {
                                echo $item.'<br>';
                            }
                        ?>
                    </table>
                    <h3>Les sports</h3>
                    <p>
                        <?php
                            foreach ($sportArray as $key => $sport) {
                                $sportArray[$key] = 'toto';

                                echo $sport;
                                echo '<br>';
                            }
                        foreach ($sportArray as $key => $sport) {
                            echo $sport;
                            echo '<br>';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
