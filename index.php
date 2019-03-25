<?php require('header.php') ?>

<div class="jumbotron">
    <?php 
    if (isset($_SESSION['userId'])) {
        ?>
    <p class="lead">You are logged in</p>
    <hr class="my-4">
    <?php

} else {
    ?>

    <p>You are logged out </p>

    <?php

}
?>


</div>



<?php require('footer.php') ?>