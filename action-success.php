<?php

use singleton\Flash;

include_once 'header.php';

    $flash = Flash::getInstance();
    $flash->addFlash('Super, l\'action a bien été effectué.', 'success');

    header("Location: ../index.php");
