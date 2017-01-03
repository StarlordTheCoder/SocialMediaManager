<?php
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 29.03.2016
 * Time: 15:09
 */
require_once "../controller/LoginController.php";

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_POST, 'password') ?? "";
$controller = new Login();
$controller->loginPerson($username, $password);