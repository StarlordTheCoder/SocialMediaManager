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
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='startDateTimePicker'>
                    <input type='text' class="form-control" name="startDate" id="startDate" required="required" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <label for="endDate">End</label>
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='endDateTimePicker'>
                    <input type='text' class="form-control" name="endDate" id="endDate" required="required" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
            </div>
        </div>
    </div>
    <label for="isAllDay">All day long</label>
    <input type="checkbox" name="isAllDay" id="isAllDay" class="form-control"> <br/>
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="createPostDraftButton" name="createPostDraftButton">Create Draft</button>
</form>

<script src="js/CreateDateTimePickers.js" type="text/javascript"></script>