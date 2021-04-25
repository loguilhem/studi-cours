<?php

namespace injection;

use FlashBagInterface;

class FlashBag implements FlashBagInterface
{
    public function addFlash(string $data, string $type)
    {
        $_SESSION["flash-message"] = $data;
        $_SESSION["flash-type"] = $type;
    }

    public function printFlash()
    {
        if (isset($_SESSION["flash-message"]) && isset($_SESSION["flash-type"])) {
            $flash = [$_SESSION["flash-type"], $_SESSION["flash-message"]];
            session_unset();

            return $flash;
        }
    }
}
