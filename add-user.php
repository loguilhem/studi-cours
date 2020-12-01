<?php
    include_once 'header.php';

    $bag = new FlashBag();

    $user = new User($bag);
    $user->add('admin');

    header("Location: index.php");