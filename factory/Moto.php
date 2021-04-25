<?php

namespace factory;


class Moto extends Transport
{
    private $brand = 'bugatti';

    public function getBrand()
    {
        return $this->brand;
    }

    public function travel()
    {
        return 'La moto est chouette. '.parent::travel();
    }
}
