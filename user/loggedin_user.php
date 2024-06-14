<?php include "../mysql/db.php"; ?>
<?php include "../includes/functions.php"; ?>
<?php include "../includes/header.php" ?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_user.php");
    exit;
}
$username = $_SESSION['username'];
?>

<div class="container">
    <div class="col-sm-6">

        <h1>Welcome <?php echo $username; ?></h1>
        <p>You are now logged in.</p>
        <a href="logout_user.php" class="">Logout</a>
    </div>
</div>

<?php include "../includes/footer.php" ?>