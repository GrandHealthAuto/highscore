<?php
if(!defined("APP_PATH"))
    define("APP_PATH", realpath(dirname(__FILE__) . "/.."));

// composer autload
require_once APP_PATH . "/vendor/autoload.php";

King23\Core\Classloader::register();
King23\Core\Classloader::init(APP_PATH . "/src");

$reg = King23\Core\Registry::getInstance();

// Twig Template configuration
Twig_Autoloader::register();
$reg->twig = new Twig_Environment(new Twig_Loader_Filesystem(APP_PATH ."/templates"), array(
    "cache" => APP_PATH . "/cache/templates_c",
    "debug" => true,
    "auto_reload" => true // remove to disabled recompiling
));


require_once "routes.php";
