<?php
namespace EXAMPLE\Views;
class StaticView extends BaseView
{
    protected function index($request)
    {
        var_dump($_REQUEST);
        die();
    }
}
