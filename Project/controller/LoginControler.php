<?php
require_once "../model/LoginModel.php";
require_once "CustomSession.php";
/**
 * Created by PhpStorm.
 * User: Serphin
 * Date: 01.03.2016
 * Time: 15:44
 */
/**
 * Controller für die Anmeldung
 */
class Login
{
    private $model;
    private $session;
    public function __construct()
    {
        $this->model = new LoginModel();
        $this->session = CustomSession::getInstance();
    }
    /**
     * Melde den spezifizierte User mit dem angegebenen Benutername / Passwort an
     * @param string $username
     * @param string $password
     */
    public function loginPerson(string $username, string $password)
    {
		echo $username;
        $user = $this->model->load($username);
        if ($password == $user['password']) {
            $this->saveUser($user);
            return;
        }
        //Password wrong
        $this->loginError();
    }
    /**
     * Saves the user to the Session and exites the script
     * @param $user
     * The user to save
     */
    private function saveUser($user)
    {
        $this->session->setCurrentUser($user);
    }
    private function loginError()
    {
        http_response_code(500);
    }
}
$username = filter_input(INPUT_GET, 'Username', FILTER_SANITIZE_STRING) ?? "";
$password = filter_input(INPUT_GET, 'Password') ?? "";
$controller = new Login();
$controller->loginPerson($username, $password);