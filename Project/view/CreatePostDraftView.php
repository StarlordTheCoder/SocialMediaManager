<?php
/**
 * Created by PhpStorm.
 * User: Pascal
 * Date: 16.01.2016
 * Time: 19:57
 */
?>
<form onsubmit="createPost(); return false;" method="post" action="javascript:void(0);" name="createPostDraftForm" id="createPostDraftForm">
    <label for="postTitle">Title</label>
    <input type="text" name="postTitle" id="postTitle" class="form-control" required="required"> <br/>
    <label for="postContent">Content</label>
    <input type="text" name="postContent" id="postContent" class="form-control" required="required"> <br/>
    <label for="startDate">Start</label>
    <input type="date" name="startDate" id="startDate" class="form-control" required="required"> <br/>
    <label for="endDate">End</label>
    <input type="date" name="endDate" id="endDate" class="form-control" required="required"> <br/>
    <label for="isAllDay">All day long</label>
    <input type="checkbox" name="isAllDay" id="isAllDay" class="form-control"> <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="createPostDraftButton" name="createPostDraftButton">Create Draft</button>
</form>