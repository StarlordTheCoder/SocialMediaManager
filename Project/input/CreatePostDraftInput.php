<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16.01.2016
 * Time: 20:21
 */
require_once "../Model/PostDraftModel.php";

//TODO Get User input, maybe controller to validate?
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?? "";
$model = new PostDraftModel();
$model->add(null, null, null);