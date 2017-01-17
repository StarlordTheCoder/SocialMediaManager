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

    /**
     * @param string $title
     * @param string $content
     * @param datetime $start
     * @param datetime $end
     * @param bool $allDay
     * @return Post
     */
    public function add(string $title, string $content, datetime $start, datetime $end, bool $allDay): Post
    {
        $post = $this->createNewPostObject($title, $content, $start, $end, $allDay);

        $this->session->addPost($post);

        return $post;
    }

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param datetime $start
     * @param datetime $end
     * @param bool $allDay
     */
    public function save(int $id, string $title, string $content, datetime $start, datetime $end, bool $allDay)
    {
        $post = new Post($id);

        $post->setTitle($title)->setContent($content)->setStart($start)->setEnd($end)->setAllDay($allDay);

        $this->session->updatePost($post);
    }

    /**
     * @param string $title
     * @param string $content
     * @param datetime $start
     * @param datetime $end
     * @param bool $allDay
     * @return Post
     */
    private function createNewPostObject(string $title, string $content, datetime $start, datetime $end, bool $allDay): Post
    {
        $latestId = count($this->session->getPosts());

        $post = new Post($latestId);

        $post->setTitle($title)->setContent($content)->setStart($start)->setEnd($end)->setAllDay($allDay);

        return $post;
    }
}