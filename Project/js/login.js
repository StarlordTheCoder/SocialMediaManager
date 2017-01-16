/**
 * Created by Alain on 13.12.2016.
 */

function login() {
    var genericFormData = new FormData($("form")[0]);

    var previousValue = $('#loginButton').html();
    $('#loginButton').html('...').prop( "disabled", true);

    $.ajax({
        type: 'POST',
        url: 'input/LoginInput.php',
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#loginButton').html('✔');
            loginStatusChanged();
        },
        error: function (request, status, error) {
            $('#loginForm').effect('shake', {times:2}, 750);
            $('#loginButton').html('✘');
            setTimeout(function() {
                $('#loginButton').html(previousValue).prop( "disabled", false);
            }, 750)
        }
    });
}

function logout() {
    $.ajax({
        type: 'POST',
        url: 'input/LogoutInput.php',
        success: function (data) {
            loginStatusChanged();
        }
    });
}

function register() {
    var genericFormData = new FormData($("form")[0]);

    var previousValue = $('#registerButton').html();
    $('#registerButton').html('...').prop( "disabled", true);

    $.ajax({
        type: 'POST',
        url: 'input/RegisterInput.php',
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#registerButton').html('✔');
            loginStatusChanged();
        },
        error: function (request, status, error) {
            $('#registerForm').effect('shake', {times:2}, 750);
            $('#registerButton').html('✘');
            setTimeout(function() {
                $('#registerButton').html(previousValue).prop( "disabled", false);
            }, 750)
        }
    });
}

function loginStatusChanged() {
    location.reload();
}