<?php

namespace Vue;

class CarVue extends RenderGlobalVue
{
    public function render($car)
    {

        $content = '
            <div class="row justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
            <h5 class="card-title">' . $car->getBrand() . '</h5>' .
            '<h6 class="card-subtitle mb-2 text-muted">' . $car->getCategory().' | '.$car->getPlace() . ' places</h6>
            <p class="card-text">Il nous reste : ' . $car->getStock() . ' véhicules de disponible.</p> 
            </div></div></div>'
        ;

        $this->print($content);
    }
}
