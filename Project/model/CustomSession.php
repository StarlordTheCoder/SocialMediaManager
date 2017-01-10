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

// Custom-Klassen müssen vor dem Starten der Session eingebunden werden, ansonsten werden diese in __PHP_Incomplete_Class übersetzt
require_once("User.php");
require_once("Post.php");

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
    public static function getInstance(): CustomSession
    {
        if (!isset(self::$instance)) { // If no instance then create one
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function destroySession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
    }

    // Current User
    public function setCurrentUser($user)
    {
        $_SESSION['CurrentUser'] = $user;
    }
    public function getCurrentUser()//TODO PHP7.1 : ?User
    {
        return isset($_SESSION['CurrentUser']) ? $_SESSION['CurrentUser'] : null;
    }

    // All Users (Temporary replacement for database)
    public function addUser(User $user)
    {
        if(!isset($_SESSION['AllUsers'])) {
            $_SESSION['AllUsers'] = array();
        }

        array_push($_SESSION['AllUsers'], $user);
    }
    public function getUsers(): array
    {
        return isset($_SESSION['AllUsers']) ? $_SESSION['AllUsers'] : array();
    }

    // Posts (Temporary replacement for database)
    public function addPost(Post $post)
    {
        if(!isset($_SESSION['AllPosts'])) {
            $_SESSION['AllPosts'] = array();
        }

        array_push($_SESSION['AllPosts'], $post);
    }
    public function getPosts(): array
    {
        return isset($_SESSION['AllPosts']) ? $_SESSION['AllPosts'] : array();
    }
    public function updatePost(Post $post)
    {
        $_SESSION['AllPosts'][$post->getId()] = $post;
    }
}