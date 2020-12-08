<?php

class CarController
{
    private function provideData()
    {
        yield (new Car())
            ->setId(1)
            ->setBrand('Peugeot')
            ->setPlace(4)
            ->setCategory('Citadine')
            ->setStock(3)
        ;

        yield (new Car())
            ->setId(2)
            ->setBrand('Renault')
            ->setPlace(6)
            ->setCategory('Espace')
            ->setStock(1)
        ;

        yield (new Car())
            ->setId(3)
            ->setBrand('Mercedes')
            ->setPlace(4)
            ->setCategory('Berline')
            ->setStock(0)
        ;
    }

    public function listCars()
    {

        return $this->provideData();
    }

    public function getCar(int $id): Car
    {
        foreach ($this->provideData() as $car) {
            if ($car->getId() === $id) {
                return $car;
            }
        }
    }
}