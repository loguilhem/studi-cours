<?php

namespace factory;

class Car extends Transport
{
    private $brand = 'renault';

    public function getBrand()
    {
        return $this->brand;
    }

    public function travel()
    {
        return 'le Bus est sympa. '. parent::travel();
    }
}
