<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16.01.2016
 * Time: 19:57
 */
?>
<form onsubmit="createPost(); return false;" method="post" action="javascript:void(0);" name="createPostDraftForm" id="createPostDraftForm">
    <label for="username">Title</label>
    <input type="text" name="username" id="username" class="form-control" required="required"> <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="createPostDraftButton" name="createPostDraftButton">Create Draft</button>
</form>