<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;
use App\Services\Auth;

class LoginController
{
    public User $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showLogin(): View
    {
        $error = $_GET['error'] ?? null;

        $errors =
            [
                "wrong_credentials" => "Špatné přihlašovací údaje",
                "user_exist" => "Uživatel s těmito údaji už v databázi existuje.",
            ];

        return View::render('login', [
            'title' => "Login do aplikace TodoApp",
            'error' => $errors[$error] ?? "",
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
        if ($user = $this->userModel->exists($data['email'], $data['password'])) {
            Auth::login($user['id']);
            header('location: /TodoApp');
        } else {
            header('location: /TodoApp/login?error=wrong_credentials');
        }
    }
}
