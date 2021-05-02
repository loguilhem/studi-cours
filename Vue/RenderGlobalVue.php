<?php

namespace Vue;

abstract class RenderGlobalVue
{
    private function renderHeader()
    {
        include_once 'header.php';
    }

    private function renderFooter()
    {
        include_once 'footer.php';
    }

    public function print($content)
    {
        $this->renderHeader();

        echo $content;

        $this->renderFooter();
    }
}
