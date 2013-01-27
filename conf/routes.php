<?php
$router = King23\Core\Router::getInstance();
$router->addRoute("/save/", '\Highscore\Views\PlayerAPIView', "save");
$router->addRoute("/load/", '\Highscore\Views\PlayerAPIView', "load");
$router->addRoute("/get/", '\Highscore\Views\PlayerAPIView', "getPlayerScore");
