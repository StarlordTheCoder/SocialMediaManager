/**
 * Created by Alain on 13.12.2016.
 */
function register() {
    var genericFormData = new FormData($("form")[0]);

    $.ajax({
        type: "POST",
        url: "../input/RegisterInput.php",
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#registerButton").val('✔');
        },
        error: function (request, status, error) {
            $("#registerButton").val('✘');
        }
    });
}