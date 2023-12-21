<?php
use Core\Router;

$router = new Router();

//defince cest
$router->addRoute("/TodoApp/", 'App\TestClass', 'index');
$router->addRoute("/TodoApp/about", 'App\TestClass', 'index');
$router->addRoute("/TodoApp/iphone", 'App\TestClass', 'index');



$currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($currentUrl);
