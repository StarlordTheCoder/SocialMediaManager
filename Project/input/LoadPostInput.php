<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16.01.2017
 * Time: 19:51
 */
require_once "../model/CustomSession.php";

$session = CustomSession::getInstance();

$result = array();

/** @var Post $post */
foreach ($session->getPosts() as $post) {
    $postAsArray = [
        "id" => $post->getId(),
        "title" => $post->getTitle(),
        "allDay" => $post->isAllDay(),
        "start" => $post->getStart(),
        "end" => $post->getEnd()
    ];

    array_push($result, $postAsArray);
}

echo json_encode($result);