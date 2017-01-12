<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 13.12.2016
 * Time: 09:09
 */
?>
<h2 class="form-signin-heading">Log In</h2>
<form onsubmit="login(); return false;" method="get" action="javascript:void(0);" name="loginForm" id="loginForm">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control"> <br/>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control"> <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="loginButton" name="loginButton">Log in</button>
</form>