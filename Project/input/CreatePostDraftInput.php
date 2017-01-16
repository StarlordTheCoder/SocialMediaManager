<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16.01.2016
 * Time: 20:21
 */
require_once "../Model/PostDraftModel.php";

//TODO Maybe controller to validate input?

$title = filter_input(INPUT_POST, 'postTitle', FILTER_SANITIZE_STRING) ?? "";
$content = filter_input(INPUT_POST, 'postContent', FILTER_SANITIZE_STRING) ?? "";
$start = new DateTime(filter_input(INPUT_POST, 'startDate', FILTER_SANITIZE_STRING) ?? "");
$end = new DateTime(filter_input(INPUT_POST, 'endDate', FILTER_SANITIZE_STRING) ?? "");
$allDay = filter_input(INPUT_POST, 'isAllDay', FILTER_VALIDATE_BOOLEAN) ?? false;

$model = new PostDraftModel();

$model->add($title, $content, $start, $end, $allDay);