<?php
    include_once 'header.php';

    $flash = Flash::getInstance();
    $flash->addFlash('Oups, il y a un problème.', 'danger');

    header("Location: ../index.php");