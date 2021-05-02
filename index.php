<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'Autoloader.php';
Autoloader::register();

use Controller\Controller;

$controller = new Controller();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'list':
            $controller->listCars();
            break;
        case 'car':
            $controller->getCar($_GET['car']);
            break;
        default:
            $controller->notFound();
            break;
    }
} else {
    $controller->home();
}
