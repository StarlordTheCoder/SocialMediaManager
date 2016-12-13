
<?php
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 29.03.2016
 * Time: 15:09
 */
require_once "../controller/RegisterController.php";
$username = filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING) ?? "";
$name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING) ?? "";
$surname = filter_input(INPUT_POST, 'Surname', FILTER_SANITIZE_STRING) ?? "";
$mail = filter_input(INPUT_POST, 'Mail', FILTER_SANITIZE_EMAIL) ?? "";
$password = filter_input(INPUT_POST, 'Password') ?? "";
$repeatPassword = filter_input(INPUT_POST, 'RepPassword') ?? "";
$controller = new Register();
$controller->registerPerson($username, $password, $repeatPassword, $surname, $name, $mail);