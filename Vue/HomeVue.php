<?php

namespace Vue;


class HomeVue extends RenderGlobalVue
{
    public function render()
    {
        $content = '
            <h1>
                Bienvenue
            </h1>

            <a href="?action=list" class="btn btn-primary">Voir la liste des véhicules</a>
            ';

        $this->print($content);
    }
}
