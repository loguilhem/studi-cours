<?php


namespace Vue;


class NotFoundVue extends RenderGlobalVue
{
    public function render()
    {
        $this->print('<span class="alert alert-danger">Page not found : 404 error</span>');
    }
}
