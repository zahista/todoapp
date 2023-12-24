<?php

namespace App\Controllers;

use Core\View;
use App\Models\Todo;
use Core\Dump;

class DashboardController
{
    public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();
        
        return View::render('dashboard', [
            'todos' => $todos,
            'title' => "Dashboard todo aplikace",
        ]);
    }

    public function submit($data)
    {
        Dump::dd($data);

        $new_todo = new Todo();
        $new_todo->create($data);

        header('location: /TodoApp/');
    }
}
