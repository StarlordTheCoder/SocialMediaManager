<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 13.12.2016
 * Time: 09:09
 */
?>
<form onsubmit="register(); return false;" method="post" action="javascript:void(0);" name="registerForm" id="registerForm">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control"> <br/>
    <label for="surname">Surname</label>
    <input type="text" name="surname" id="surname" class="form-control"> <br/>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control"> <br/>
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail" class="form-control"> <br/>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control"> <br />
    <label for="passwordtwo">Repeat Password</label>
    <input type="password" name="passwordtwo" id="passwordtwo" class="form-control"> <br />
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="registerButton" name="registerButton">Sign in</button>
</form>