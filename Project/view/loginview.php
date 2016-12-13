<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 13.12.2016
 * Time: 09:09
 */
?>

<html>
    <head>
        <title>Login</title>
        <script src="login.js"></script>
        <script src="jquery.min.js"></script>
    </head>
    <body>
        <form onsubmit="login(); return false;" >
            <label for="username">Username</label> <input type="text" name="username" id="username"> <br/>
            <label for="password">Password</label> <input type="password" name="password" id="password"> <br />
            <input type="submit" name="loginbutton" id="loginbutton">
        </form>
    </body>
</html>
