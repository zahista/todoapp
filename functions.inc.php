<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

function userExists(string $email, string $password): bool
{
    if ($email === "zahista@gmail.com" && $password === "Heslo") {
        return true;
    }
    return false;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
