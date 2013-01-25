<?php
namespace EXAMPLE\Views;
class StaticView extends BaseView
{
    protected function index($request)
    {
        return $this->render("static/index.html", array());
    }
}
