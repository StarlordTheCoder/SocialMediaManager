<?php

/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 04.01.2017
 * Time: 12:07
 */
require_once "CustomSession.php";
require_once "Post.php";

class PostDraftModel
{
    private $session;
    public function __construct()
    {
        $this->session = CustomSession::getInstance();
    }

    public function add(string $name, string $content, datetime $date): Post
    {
        $latestId = count($this->session->getPosts());

        $post = new Post($latestId);

        $post->setTitle($name);
        $post->setContent($content);
        $post->setStart($date);

        $this->session->addPost($post);

        return $post;
    }

    public function save(Post $post)
    {
        $this->session->updatePost($post);
    }
}