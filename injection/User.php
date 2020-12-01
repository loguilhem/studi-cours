<?php


class User
{
    private $flashBag;

    public function __construct(FlashBagInterface $flashBag)
    {
        $this->flashBag = $flashBag;
    }

    public function add(string $name)
    {
        if ($name != 'admin') {
            $this->flashBag->addFlash('Bravo, le pseudonyme est correct.', 'success');
        } else {
            $this->flashBag->addFlash('Désolé ce pseudonyme est réservé.', 'danger');
        }

        /*
         * votre code
         */
    }
}