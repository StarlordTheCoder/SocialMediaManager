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

    public function add(string $title, string $content, datetime $start, datetime $end, bool $allDay): Post
    {
        $latestId = count($this->session->getPosts());

        $post = new Post($latestId);

        $post->setTitle($title)->setContent($content)->setStart($start)->setEnd($end)->setAllDay($allDay);

        $this->session->addPost($post);

        return $post;
    }

    public function save(Post $post)
    {
        $this->session->updatePost($post);
    }
}