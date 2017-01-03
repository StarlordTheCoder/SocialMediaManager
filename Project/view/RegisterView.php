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
        <title>Register</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="../js/register.js" type="application/javascript"></script>
        <script src="../js/jquery.min.js" type="application/javascript"></script>
    </head>
    <body>
        <form onsubmit="register(); return false;" method="post">
            <label for="username">Username</label> <input type="text" name="username" id="username"> <br/>
            <label for="surname">Surname</label> <input type="text" name="surname" id="surname"> <br/>
            <label for="name">Name</label> <input type="text" name="name" id="name"> <br/>
            <label for="mail">Mail</label> <input type="email" name="mail" id="mail"> <br/>
            <label for="password">Password</label> <input type="password" name="password" id="password"> <br />
            <label for="passwordtwo">Repeat Password</label> <input type="password" name="passwordtwo" id="passwordtwo"> <br />
            <input type="submit" name="registerButton" id="registerButton">
        </form>
    </body>
</html>
