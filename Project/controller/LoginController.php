<?php
require_once "../model/LoginModel.php";
require_once "../model/CustomSession.php";
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
        $user = $this->model->load($username);
        if (isset($user) && $password == $user->getPassword()) {
            $this->saveUser($user);
            return;
        }

        //Password wrong
        $this->loginError();
    }
    /**
     * Saves the user to the Session and exits the script
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