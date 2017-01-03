/**
 * Created by Alain on 13.12.2016.
 */
function login() {
    var genericFormData = new FormData($("form")[0]);

    $.ajax({
        type: "POST",
        url: "../input/LoginInput.php",
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#loginButton").val('✔');
        },
        error: function (request, status, error) {
            $("#loginButton").val('✘');
        }
    });
}