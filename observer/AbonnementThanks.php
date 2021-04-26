<?php

namespace observer;

use SplObserver;
use SplSubject;

class AbonnementThanks implements SplObserver
{

    public function update(SplSubject $client)
    {
        echo 'Merci pour votre réabonnement, le nouvel abonnement démarre au '. $client->getDateAbonnement()->format('d/m/Y');
    }
}
