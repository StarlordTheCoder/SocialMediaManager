<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 15.03.2016
 * Time: 13:59
 */
/**
 * Eigene Implementation der Session, damit diese von der Logik getrennt ist.
 */
class CustomSession
{
    private static $instance;
    /**
     * SessionHandler constructor.
     */
    private function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public static function getInstance()
    {
        if (!self::$instance) { // If no instance then create one
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function setCurrentUser($user)
    {
        $_SESSION['CurrentUser'] = $user;
    }
    public function getCurrentUser()
    {
        return isset($_SESSION['CurrentUser']) ? $_SESSION['CurrentUser'] : null;
    }
    public function destroySession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
    }
}