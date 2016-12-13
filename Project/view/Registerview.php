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
        <title>Register</title>
        <script src="register.js"></script>
    </head>
    <body>
        <form onsubmit="register(); return false;">
            <label for="username">Username</label> <input type="text" name="username" id="username"> <br/>
            <label for="surname">Surname</label> <input type="text" name="surname" id="surname"> <br/>
            <label for="name">Name</label> <input type="text" name="name" id="name"> <br/>
            <label for="password">Password</label> <input type="password" name="password" id="password"> <br />
            <label for="passwordtwo">Repeat Password</label> <input type="password" name="passwordtwo" id="passwordtwo"> <br />
            <input type="submit" name="register" id="register">
        </form>
    </body>
</html>
