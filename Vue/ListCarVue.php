<?php

namespace Vue;

class ListCarVue extends RenderGlobalVue
{
    public function render($cars)
    {

        $content = '
            <div class="row justify-content-center">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Nombre de place</th>
                        <th>Stock</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>';

                    foreach ($cars as $car) {
                        $content .= '
                         <tr>
                         <td>'.$car->getCategory().'</td>
                         <td>'.$car->getPlace().'</td>
                         <td>'.$car->getStock().'</td>
                         <td><a class="btn btn-sm btn-secondary" href="?action=car&car='.$car->getId().'">Voir</a></td>
                         </tr>';
                    }
                     $content .= '</tbody>
                            </table>
                        </div>
                        ';
        $this->print($content);
    }
}
