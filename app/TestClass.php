<?php

namespace App;

use Core\View;

class TestClass
{
    public function index()
    {
        return View::render('dashboard');
    }
}
