<?php

namespace observer;

use DateTime;
use SplObserver;
use SplSubject;

class Client implements SplSubject
{
    private $dateAbonnement;

    private $observers;

    public function __construct(DateTime $dateAbonnement)
    {
        $this->observers = new \SplObjectStorage(); //une collection d'objets
        $this->dateAbonnement = $dateAbonnement;
    }

    public function attach(SplObserver $observer)
    {
//        echo 'On vient d\'attacher un observer au client<br><br>';
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function updateDateAbonnement(DateTime $dateTime)
    {
        $this->dateAbonnement = $dateTime;
        $this->notify();
    }

    public function checkDateAbonnement()
    {
        $this->notify();
    }

    public function getDateAbonnement(): DateTime
    {
        return $this->dateAbonnement;
    }
}
