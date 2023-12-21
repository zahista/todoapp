<?php

require_once "../functions.inc.php";
require_once "../autoload.php";


$email = test_input($_POST['email']) ?? "Nemám email";
$password = test_input($_POST['password']) ?? "Nemám heslo";

if (userExists($email, $password)) {
    header('location: ../views/dashboard.php');
} else {
    header('location: ../views/index.php?error=wrong_credentials');
}
