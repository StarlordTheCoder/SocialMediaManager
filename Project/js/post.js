/**
 * Created by Pascal on 16.01.2017.
 */

function createPost() {
    var genericFormData = new FormData($("form")[0]);

    var previousValue = $('#createPostDraftButton').html();
    $('#createPostDraftButton').html('...').prop( "disabled", true);

    $.ajax({
        type: 'POST',
        url: 'input/CreatePostDraftInput.php',
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#createPostDraftButton').html('✔');
        },
        error: function (request, status, error) {
            $('#createPostDraftForm').effect('shake', {times:2}, 750);
            $('#createPostDraftButton').html('✘');
            setTimeout(function() {
                $('#createPostDraftButton').html(previousValue).prop( "disabled", false);
            }, 750)
        }
    });
}