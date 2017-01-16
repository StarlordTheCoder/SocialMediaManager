<?php
/**
 * Created by PhpStorm.
 * User: Seraphin
 * Date: 14.03.2016
 * Time: 19:04
 */

/**
 * Model für die Anmeldung
 */
class LoginModel
{
    private $session;
    public function __construct()
    {
        $this->session = CustomSession::getInstance();
    }

    public function load(string $username)//TODO PHP7.1 : ?User
    {
        /** @var User $user */
        foreach ($this->session->getUsers() as $user)
        {
            if($user->getUsername() == $username) {
                return $user;
            }
        }

        return null;
    }
}