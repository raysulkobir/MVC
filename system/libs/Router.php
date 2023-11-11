<?php

class Router
{
    public function handleRequest()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if (count($url) >= 2) {
                $controllerName = $url[0] . "Controller";
                $methodName = $url[1];
                $param = isset($url[2]) ? $url[2] : null;

                $this->route($controllerName, $methodName, $param);
            } else {
                $this->showError("Invalid URL format");
            }
        } else {
            $this->defaultRoute();
        }
    }

    private function route($controllerName, $methodName, $param)
    {
        $controllerFile = "app/Controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $methodName)) {
                    echo $controller->$methodName($param);
                    // echo $controller->$methodName($param);
                } else {
                    $this->showError("Method not found");
                }
            } else {
                $this->showError("Controller not found");
            }
        } else {
            $this->showError("Controller file not found");
        }
    }

    private function defaultRoute()
    {
        require_once "app/Controllers/IndexController.php";
        $index = new IndexController();
        $index->home();
    }

    private function showError($message)
    {
        echo $message;
    }
}


