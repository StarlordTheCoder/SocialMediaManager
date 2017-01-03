<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 13.12.2016
 * Time: 09:09
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="../js/login.js" type="application/javascript"></script>
        <script src="../js/jquery.min.js" type="application/javascript"></script>
    </head>
    <body>
        <form onsubmit="login(); return false;" method="get" action="javascript:void(0);">
            <label for="username">Username</label> <input type="text" name="username" id="username"> <br/>
            <label for="password">Password</label> <input type="password" name="password" id="password"> <br />
            <input type="submit" name="loginButton" id="loginButton">
        </form>
    </body>
</html>
