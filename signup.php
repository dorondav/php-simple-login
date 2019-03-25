<?php require('header.php') ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Signup</h1>
        <hr>
        <form action="includes/signup.inc.php" class="lead" method="post">
            <?php 

            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyfields') {
                    ?>
            <div class="alert alert-danger" role="alert">
                <p>Fill in all fields!!!</p>
            </div>
            <?php

        } elseif ($_GET['error'] == 'invaliduidmail') {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Invald uesername and email</p>
            </div>
            <?php 
        } elseif ($_GET['error'] == 'invaliduid') {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Invald uesername </p>
            </div>
            <?php 
        } elseif ($_GET['error'] == 'invalidmail') {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>Invald email </p>
            </div>
            <?php 
        } elseif ($_GET['error'] == 'passwordcheck') {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>your passwrds do not match </p>
            </div>
            <?php 
        } elseif ($_GET['error'] == 'usertaken') {
            ?>
            <div class="alert alert-danger" role="alert">
                <p>user already taken </p>
            </div>
            <?php 
        }
    } elseif ($_GET['signup'] == 'success') {
        ?>
            <div class="alert alert-success" role="alert">
                <p>User Created</p>
            </div>
            <?php 
        }


        ?>
            <div class="form-group">
                <input type="text" class="form-control" name="uid" id="uid" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="mail" placeholder="e-mail">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pwd-repeat" placeholder="Prepeat password">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="signup-submit">Signup</button>
        </form>
    </div>
</div>


<?php require('footer.php') ?>