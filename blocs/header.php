<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/functions/functions.php';

    session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: pages/login.php');
    }
    var_dump($_SESSION['expires']);
    var_dump(time());
    if (isset($_SESSION['expires']) && $_SESSION['expires'] < time()) {
        header('Location: pages/expired.php');
    }
?>

<html lang="fr">
<head>
    <title>Cookies et sessions</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bootstrap.min.css">
</head>
<body>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/blocs/menu.php';
