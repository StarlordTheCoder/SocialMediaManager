<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 13.12.2016
 * Time: 09:09
 */
?>
    <body>
    <script src="../js/login.js" type="application/javascript"></script>
    <div class="container">
        <h2 class="form-signin-heading">Log In</h2>
        <form onsubmit="login(); return false;" method="get" action="javascript:void(0);">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control"> <br/>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control"> <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="login()">Sign in</button>
        </form>

    </div>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>