/**
 * Created by Alain on 13.12.2016.
 */
function login() {
    var genericFormData = new FormData($("form")[0]);

    $.ajax({
        type: "GET",
        url: "../input/LoginInput.php",
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $("#loginbutton").val('✔');
            },
        error: function (request, status, error) {
            $("#loginbutton").val('✘');
            }
        });
}