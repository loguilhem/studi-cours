<?php
include_once '../header.php';

$controller = new CommandController();


$command = $controller->addCommand($_POST['car'], DateTime::createFromFormat('Y-m-d', $_POST['startDate']),  DateTime::createFromFormat('Y-m-d', $_POST['endDate']));

if ($command['command']) {
    echo '<h2 class="alert alert-success">'.$command['message'].'</h2>';
    echo '<p>Pour rappel, elle débute à '.$command['command']->getStartDate()->format('d/m/Y').' et se termine à '.$command['command']->getEndDate()->format('d/m/Y').'</p>';
    echo '<p>Son numéro est : '.$command['command']->getNumber().'</p>';
} else {
    echo '<h2 class="alert alert-danger">'.$command['message'].'</h2>';
}

?>

