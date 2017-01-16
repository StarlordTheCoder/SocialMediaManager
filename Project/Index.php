<?php
/**
 * Created by PhpStorm.
 * User: Alain
 * Date: 10.01.2017
 * Time: 08:37
 */

require_once("model/CustomSession.php");

$session = CustomSession::getInstance();

$currentUser = $session->getCurrentUser();

?>
 <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" crossorigin="anonymous">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js" crossorigin="anonymous"></script>

        <script src="js/index.js" type="application/javascript"></script>
        <script src="js/login.js" type="application/javascript"></script>
        <script src="js/post.js" type="application/javascript"></script>

        <title>Social-Media-Manager</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Social-Media-Manager</a>
                </div>
                <ul class="nav navbar-nav">
                    <li id="home"><a href="#" onclick="activateTab('home', 'view/Home.php')" data-toggle="tab">Home</a></li>
                    <li id="calendarNav"><a href="#" onclick="activateTab('calendarNav', 'view/CalendarView.php')" data-toggle="tab">Calendar</a></li>
                    <li id="posts"><a href="#" onclick="activateTab('posts', 'view/CreatePostDraftView.php')" data-toggle="tab">Posts</a></li>
                </ul>
                <?php

                if($currentUser != null)
                {
                    ?>
                    <ul class="nav navbar-nav navbar-right">2
                        <li><a><?=$currentUser->getUsername()?></a></li>
                        <li id="logout"><a href="#" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                    <?php
                }
                else
                {
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li id="signUp"><a href="#" onclick="activateTab('signUp', 'view/RegisterView.php')" data-toggle="tab"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li id="login"><a href="#" onclick="activateTab('login', 'view/LoginView.php')" data-toggle="tab"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                    <?php
                }
                ?>

            </div>
        </nav>

        <div id="mainContent" class="container">

        </div>
    </body>
 </html>
