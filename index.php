<?php
    $firstName = 'Robert';
    $lastName = 'Marley';

    $fruits = [
            'Pommes', 'Poires', 'Bananes', 'Mangues', 'Ananas', 'Litchis'
    ];

    $maths = 15;
    $anglais = 10;
    $informatique = 20;
    $biologie = 10;

    var_dump($maths);

    $moyenne = ($maths + $anglais + $informatique + $biologie)/4;


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
                <div class="col-6">
                    <h1>Coucou tout le monde</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nulla mi, tincidunt sit amet au</p>
                </div>
            <div class="col-6">
                <h2>Ma colonne de droite</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nulla mi, tincidunt sit amet au</p>
                    <section>
                        <article>
                            <?php
                                echo "<h3>Voici vote moyenne</h3>";
                                echo (($maths + $anglais + $informatique + $biologie)/4).'/20';
                            ?>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nulla mi, tincidunt sit amet auctor ac, maximus eget lacus. Aenean et urna urna. Etiam fermentum eu augue sed pharetra. Nulla facilisi. Cras vel sem id ipsum cursus placerat. Ut dolor dui, blandit sed ultrices quis, volutpat non dui. Etiam ultrices efficitur risus, a congue eros tempor at. Curabitur quis tincidunt nisi. Etiam justo nisl, cursus at finibus ut, tincidunt volutpat libero. In mattis libero lorem, sed efficitur erat elementum nec. Nulla ultrices mattis tincidunt. Curabitur feugiat scelerisque sapien, a luctus lectus luctus in. Sed quam enim, consectetur ut finibus a, sollicitudin posuere orci. Fusce varius nulla vel porttitor commodo. Ut nisi sapien, fermentum vel magna sit amet, placerat efficitur risus.
                            </p>
                        </article>
                    </section>

                </div>
            </div>
        </div>
    </body>
</html>
