<?php


interface FlashBagInterface
{
    public function addFlash(string $data, string $type);

    public function printFlash();
}