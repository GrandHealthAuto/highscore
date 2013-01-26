<?php
$router = King23\Core\Router::getInstance();
$router->addRoute("/", '\EXAMPLE\Views\StaticView', "index", array());
$router->addRoute("/save/", '\Highscore\Views\PlayerAPIView', "save");
