<?php include "../mysql/db.php"; ?>
<?php include "../includes/functions.php"; ?>
<?php include "../includes/header.php" ?>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>

<div class="container">
    <div class="col-sm-6">

        <?php
        global $username;

        echo  "<h1>Welcome $username</h1>" ?>
    </div>
</div>

<?php include "../includes/footer.php" ?>