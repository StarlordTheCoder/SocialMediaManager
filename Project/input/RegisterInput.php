<?php
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 29.03.2016
 * Time: 15:09
 */
require_once "../controller/RegisterController.php";

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?? "";
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) ?? "";
$surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING) ?? "";
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL) ?? "";
$password = filter_input(INPUT_POST, 'password') ?? "";
$repeatPassword = filter_input(INPUT_POST, 'passwordtwo') ?? "";
$controller = new Register();
$controller->registerPerson($username, $password, $repeatPassword, $surname, $name, $mail);