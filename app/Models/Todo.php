<?php

namespace App\Models;

use Core\Dump;
use Core\Model;

class Todo extends Model
{
    public function all(): array 
    {
        return $this->database->query('SELECT * FROM todos');
    }

    public function find(int $id): array
    {
        return $this->database->query("SELECT * FROM todos where id = ?", [$id]);
    }

    public function whereDone(int $bool): array
    {
        return $this->database->query("SELECT * FROM todos where done = ?", [$bool]);
    }

    public function create($values)
    {
        return 
        $this->database->query("INSERT INTO todos (title, description)
        VALUES (?, ?)", $values);  
    }
}
