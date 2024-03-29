<?php

use Core\Router;
use App\Controllers\ApiController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;

$router = new Router();

//defince cest
$router->get("/TodoApp/", DashboardController::class, 'index', ['auth']);
$router->get("/TodoApp/done", DashboardController::class, 'done');
$router->get("/TodoApp/delete", DashboardController::class, 'deleteTodo');
$router->post("/TodoApp/", DashboardController::class, 'createNewTodo');
$router->get("/TodoApp/update", DashboardController::class, 'markTodoAsDone');

$router->get("/TodoApp/api", ApiController::class, "index");

$router->get("/TodoApp/login", LoginController::class, 'showLogin');
$router->post("/TodoApp/login", LoginController::class, 'loginUser');


$router->get("/TodoApp/register", LoginController::class, 'ShowRegisterForm');
$router->post("/TodoApp/register", LoginController::class, 'registerUser');
$router->get("/TodoApp/logout", LoginController::class, 'logout');


//zjištění na jaké adrese 
$currentUrl = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
$currentUrl = parse_url($currentUrl)['path'];

var_dump('ahoj Víťo');

//spusť metodu pro tuto URL na konkrétním kontroleru
$router->dispatch($currentUrl);
