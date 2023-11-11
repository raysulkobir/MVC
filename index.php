<?php
function customAutoLoader($className) {
    $classFile = 'system/libs/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
        return true;
    }
    return false;
}

spl_autoload_register("customAutoLoader");
include_once('app/config/config.php');


$router = new Router();
$router->handleRequest();
