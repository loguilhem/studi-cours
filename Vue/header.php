<?php
    ini_set('display_errors', 1);

require_once '/var/www/html/studi/Model/Car.php';
require_once '/var/www/html/studi/Model/Customer.php';
require_once '/var/www/html/studi/Model/Command.php';
require_once '/var/www/html/studi/Controller/CarController.php';
require_once '/var/www/html/studi/Controller/CommandController.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/Assets/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>Le modèle MVC</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Vue/car/car-list.php">Voitures</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">