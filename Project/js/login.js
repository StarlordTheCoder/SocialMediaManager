/**
 * Created by Alain on 13.12.2016.
 */

function login() {
    var genericFormData = new FormData($("form")[0]);

    var previousValue = $('#loginButton').html();
    $('#loginButton').html('...');

    $.ajax({
        type: 'POST',
        url: 'input/LoginInput.php',
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#loginButton').html('✔');
            activateTab('home', 'view/Home.php');
        },
        error: function (request, status, error) {
            $('#loginForm').effect('shake', {times:2}, 750);
            $('#loginButton').html('✘');
            setTimeout(function() {
                $('#loginButton').html(previousValue)
            }, 750)
        }
    });
}

function logout() {
    $.ajax({
        type: 'POST',
        url: 'input/LogoutInput.php',
        success: function (data) {
            activateTab('home', 'view/Home.php');
        }
    });
}

function register() {
    var genericFormData = new FormData($("form")[0]);

    var previousValue = $('#registerButton').html();
    $('#registerButton').html('...');

    $.ajax({
        type: 'POST',
        url: 'input/RegisterInput.php',
        data: genericFormData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('#registerButton').html('✔');
            activateTab('home', 'view/Home.php');
        },
        error: function (request, status, error) {
            $('#registerForm').effect('shake', {times:2}, 750);
            $('#registerButton').html('✘');
            setTimeout(function() {
                $('#registerButton').html(previousValue)
            }, 750)
        }
    });
}