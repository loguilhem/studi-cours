<?php

namespace factory;

abstract class Transport
{
    private $passengers;

    public function __construct(int $passengers) {
        $this->passengers = $passengers;
    }

    public function getBrand() {}

    public function travel()
    {
        if ($this->passengers > 1) {
            return 'Superbe voyage avec mes '.($this->passengers-1).' amis';
        } else {
            return 'Beau voyage mais j\'étais tout seul';
        }
    }
}
