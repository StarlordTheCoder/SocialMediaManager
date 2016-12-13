<?php
require_once "CustomSession.php";
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 01.03.2016
 * Time: 15:44
 */
/**
 * Controller für die Registrierung
 */
class Register
{
    private static $passwordRegularExpression = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@!%*?&_-])[A-Za-z\d$@!%*?&_-]{8,}/';
    private $session;
    public function __construct()
    {
        $this->session = CustomSession::getInstance();
    }
    /**
     * Register the specified User with the provided data. Will check that the Input is valid before sending it to the database.
     * @param string $username
     * @param string $password
     * @param string $repeatPassword
     * @param string $surname
     * @param string $name
     * @param string $mail
     */
    public function registerPerson(string $username, string $password, string $repeatPassword, string $surname, string $name, string $mail)
    {
        $validationResults = $this->inputValid($username, $password, $repeatPassword, $surname, $name, $mail);
        $allValid = true;
        foreach ($validationResults as $res)
        {
            if(!$res)
            {
                $allValid = false;
            }
        }
        // No Errors
        if ($allValid) {
                $this->session->setCurrentUser($insertedUser);
                return;
        }        
        //Some Error Occured
        http_response_code(500);
    }
    /**
     * @param string $username
     * @param string $password
     * @param string $repeatPassword
     * @param string $surname
     * @param string $name
     * @param string $mail
     * @return array
     */
    public static function inputValid(string $username, string $password, string $repeatPassword, string $surname, string $name, string $mail)
    {
        $usernameValid = strlen($username) < 40 && strlen($username) > 1;
        $passwordValid = $password == $repeatPassword && preg_match(Register::$passwordRegularExpression, $password);
        $surnameValid = strlen($surname) < 40 && strlen($surname) > 1;
        $nameValid = strlen($name) < 40 && strlen($name) > 1;
        $mailValid = filter_var($mail, FILTER_VALIDATE_EMAIL);
        return array($usernameValid, $passwordValid, $surnameValid, $nameValid, $mailValid != "");
    }
}