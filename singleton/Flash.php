<?php


class Flash
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    public function addFlash(string $data, string $type)
    {
        $_SESSION["flash-message"] = $data;
        $_SESSION["flash-type"] = $type;
    }

    public function printFlash()
    {
        if (isset($_SESSION["flash-message"]) && isset($_SESSION["flash-type"])) {
            echo '<span class="alert alert-'.$_SESSION["flash-type"].'">'.$_SESSION["flash-message"].'</span>';
            session_unset();
        }
    }
}