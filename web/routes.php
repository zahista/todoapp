<?php

use Core\Router;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;

$router = new Router();

//defince cest
$router->get("/TodoApp/", DashboardController::class, 'index');
$router->get("/TodoApp/done", DashboardController::class, 'done');
$router->get("/TodoApp/delete", DashboardController::class, 'deleteTodo');
$router->post("/TodoApp/", DashboardController::class, 'createNewTodo');
$router->get("/TodoApp/update", DashboardController::class, 'markTodoAsDone');


$router->get("/TodoApp/login", LoginController::class, 'showLogin');
$router->post("/TodoApp/login", LoginController::class, 'loginUser');


$router->get("/TodoApp/register", LoginController::class, 'ShowRegisterForm');
$router->post("/TodoApp/register", LoginController::class, 'registerUser');


//zjištění na jaké adrese 
$currentUrl = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
$currentUrl = parse_url($currentUrl)['path'];


//spusť metodu pro tuto URL na konkrétním kontroleru
$router->dispatch($currentUrl);
