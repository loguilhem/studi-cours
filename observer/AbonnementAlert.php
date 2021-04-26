<?php

namespace observer;

use SplObserver;
use SplSubject;

class AbonnementAlert implements SplObserver
{
    public function update(SplSubject $client): void
    {
        if (new \DateTime('now') > $client->getDateAbonnement()) {
            echo 'Attention, votre abonnement a expiré<br><br>';
        } else {
            echo 'La date d\'abonnement est OK<br><br>';
        }
    }
}
