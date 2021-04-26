<?php

namespace injection;

use FlashBagInterface;

class User
{
    private $flashBag;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    private $name;

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
