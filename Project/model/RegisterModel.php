<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 03.01.2016
 * Time: 16.39
 */
require_once "CustomSession.php";
require_once "User.php";
/**
 * Model für die Registrierung
 */
class RegisterModel
{
    private $session;
    public function __construct()
    {
        $this->session = CustomSession::getInstance();
    }

    public function add(string $username, string $password, string $surname, string $name, string $mail): User
    {
        $user = new User($username, $password, $surname, $name, $mail);

        $this->session->addUser($user);

        return $user;
    }
}