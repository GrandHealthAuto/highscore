<?php
$router = King23\Core\Router::getInstance();
$router->addRoute("/", '\EXAMPLE\Views\StaticView', "index", array());

