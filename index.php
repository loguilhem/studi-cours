<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

/*
 * 1 - Céer un cooki et regarder dans le navigateur sans expiration
 * 2 - Cookie avec date d'expiration : attention à utiliser time () + x
 * 3 - Supprimer le cookie existant
 * 4 - Créer une condition sur un cookie existe
 * 5 - création de notre session
 *  - redirection vers login si pas de $_SESSION ['id']
 */
//setcookie('myCookie', 'i like cookies', time() + 20);
//setcookie('myCookie', 'i like cookies', time() - 60);


if (!isset($_COOKIE['visitor'])) {
    $newVisitor = true;
    setcookie('visitor', 'visitor', time() + 10);
} else {
    $newVisitor = false;
    setcookie('visitor', 'visitor', time() - 10);
}



include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/header.php';
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Cookies et Sessions</h1>
<!--            --><?php
//                if ($newVisitor) {
//                    echo 'Welcome, we hope to see you often :)';
//                } else {
//                    echo 'Welcome Back, glad to see you again :)';
//                }
//            ?>

        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/footer.php';
?>
