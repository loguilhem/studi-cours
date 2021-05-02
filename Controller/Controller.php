<?php

namespace Controller;

use Repository\CarRepository;
use Vue\CarVue;
use Vue\ListCarVue;
use Vue\HomeVue;
use Vue\NotFoundVue;

class Controller
{

    public function listCars()
    {
        $carRepo = new CarRepository();
        $cars = $carRepo->listCars();

        $vue = new ListCarVue();
        $vue->render($cars);
    }

    public function getCar($id)
    {
        $carRepo = new CarRepository();
        $car = $carRepo->getCar($id);
        $vue = new CarVue();
        $vue->render($car);
    }

    public function notFound()
    {
        $vue = new NotFoundVue();
        $vue->render();
    }

    public function home()
    {
        $vue = new HomeVue();
        $vue->render();
    }

}
