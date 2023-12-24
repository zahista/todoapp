<?php

namespace App\Controllers;

use Core\View;
use App\Models\Todo;

class LoginController
{
    public function showLogin() : View
    {
        $error = $_GET['error'] ?? null;

        $errors = 
        [
            "wrong_credentials"=>"Špatné přihlašovací údaje",
            "not_email"=>"Pro přihlášení musíte použít email",
        ];

        return View::render('login', [
            'title' => "Login do aplikace TodoApp",
            'error'=> $errors[$error] ?? "",
        ]);
    }

    public function showRegisterForm(): View
    {
        return View::render('register');
    }

    public function registerUser($data)
    {
        var_dump($data);
    }

    public function loginUser($data)
    {
        var_dump($data);
    }
}
