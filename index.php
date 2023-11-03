<?php
require "system/libs/Main.php";
require "system/libs/RController.php";
require "system/libs/Load.php";

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if (count($url) >= 2) {
        $controllerName = $url[0];
        $methodName = $url[1];
        $param = isset($url[2]) ? $url[2] : null;
        // Check if the controller class exists
        $controllerFile = "app/Controllers/{$controllerName}.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            // Check if the controller class exists and the method is callable
            if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
                $controller = new $controllerName();

                // Call the method and pass the parameter
                echo $controller->$methodName($param);
            } else {
                echo "Method not found";
            }
        } else {
            echo "Controller not found";
        }
    } else {
        echo "Invalid URL format";
    }
} else {
    require_once "app/Controllers/Index.php";
    $index = new Index();
    $index->home();
}


 
