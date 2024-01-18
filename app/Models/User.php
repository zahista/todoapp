<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    protected $table = "users";
    

    public function exists($email, $password)
    {
       return $this->database->query("select * from $this->table where email = '$email' and password = '$password'")[0];
    }
}
