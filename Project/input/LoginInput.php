<?php
require_once "../controller/LoginController.php";

$username = filter_input(INPUT_GET, 'Username', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_GET, 'Password') ?? "";
$controller = new Login();
$controller->loginPerson($username, $password);