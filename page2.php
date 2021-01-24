<html lang="fr">
    <head>
        <title>Ma première page web</title>
        <meta charset="UTF-8">
        <link href="bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Ceci est notre page 2</h1>
                    <?php
                    echo '<h2>'.$_POST['firstname'].'</h2>';
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    echo $_POST['firstname'];
?>
