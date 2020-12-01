<?php


class TransportFactory
{
    public static function chooseTransportMode(int $passengers)
    {
        if ($passengers < 3) {
            return new Moto($passengers);
        } else {
            return new Car($passengers);
        }
    }
}