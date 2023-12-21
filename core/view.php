<?php

namespace Core;

class View
{
    public static function render($viewName)
    {
        require_once "views/" . $viewName . ".php";
    }
}
