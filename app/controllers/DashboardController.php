<?php

namespace App\Controllers;

use Core\Dump;
use Core\View;
use App\Models\Todo;

class DashboardController
{
    protected Todo $todo;

    public function __construct()
    {
        $this->todo = new Todo();
    }

    public function index()
    {
        return View::render('dashboard', [
            'todos' => $this->todo->whereDone(0),
            'todo_tab' => '--selected',
            'done_tab' => '',
            'title' => "Dashboard todo aplikace",
        ]);
    }

    public function done()
    {
        return View::render('dashboard', [
            'todos' => $this->todo->whereDone(1),
            'todo_tab' => '',
            'done_tab' => '--selected',
            'title' => "Dashboard todo aplikace",
        ]);
    }

    public function markTodoAsDone()
    {
        $this->todo->makeTodoDone($_GET['todo_id']);
        return header('location: /TodoApp/');
    }

    public function deleteTodo()
    {
        $this->todo->delete($_GET['todo_id']);
        return header('location: /TodoApp/done');
    }

    public function createNewTodo($data)
    {
        $this->todo->create($data);
        return header('location: /TodoApp/');
    }
}
