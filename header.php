<?php
session_start ();

require_once ('singleton/Flash.php');
require_once ('injection/FlashBagInterface.php');
require_once ('injection/FlashBag.php');
require_once ('injection/User.php');
require_once ('factory/Transport.php');
require_once ('factory/Moto.php');
require_once ('factory/Car.php');
require_once ('factory/TransportFactory.php');
require_once ('observer/AbonnementAlert.php');
require_once ('observer/AbonnementThanks.php');
require_once ('observer/Client.php');

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Design patterns</title>
    </head>
    <body>
        <div class="container">
