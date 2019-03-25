<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Login form</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <?php 
            if (isset($_SESSION['userId'])) {
                ?>
            <!-- login -->

            <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
                <button class="btn btn-outline-dark my-2 my-sm-0" name="logout-submit" type="submit">Logout</button>
            </form>

            <?php

        } else {

            // logout
            ?>

            <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
                <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/Email...">
                <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                <button class="btn btn-outline-success my-2 my-sm-0" name="login-submit" type="submit">Login</button>
            </form>

            <a href="signup.php" class="btn btn-outline-dark">singup</a>
            <?php

        }
        ?>

        </div>
    </nav>

</header>

<body>