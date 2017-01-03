<?php

/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 03.01.2017
 * Time: 16:51
 */
class User
{
    private $username;
    private $password;
    private $surname;
    private $name;
    private $mail;

    public function __construct(string $username, string $password, string $surname, string $name, string $mail)
    {
        $this->username = $username;
        $this->password = $password;
        $this->surname = $surname;
        $this->name = $name;
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }
}