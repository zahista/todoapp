<?php

namespace Core;

use Core\Database;

class Model
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database;
    }
}
