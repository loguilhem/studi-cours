<?php

class CommandController
{
    public function addCommand(int $carId, DateTime $startDate, DateTime $endDate)
    {
        $car = (new CarController())->getCar($carId);

        if ($car->getStock() > 0) {
            $car->setStock($car->getStock()-1);

            // On récupère le client en session par exemple
            $customer = new Customer();
            $customer
                ->setId(15)
                ->setEmail('email@email.com')
                ->setName('Bob Marley')
            ;

            $command = new Command();
            $command
                ->setCustomer($customer)
                ->setCar($car)
                ->setNumber('2020-12-A01') //votre code pour générer le numéro se fera ailleurs
                ->setStartDate($startDate)
                ->setEndDate($endDate)
            ;

            // votre code pour persister la commande en Base De Donnée

            return [
                'message' => 'Bravo, la commande est bien enregistrée !',
                'command' => $command
            ];
        } else {
            return [
                'message' => 'Impossible, le véhicule est indisponible !',
                'command' => null
            ];
        }
    }
}