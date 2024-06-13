<?php include "../mysql/db.php"; ?>
<?php include "../includes/functions.php"; ?>
<?php createUser(); ?>


<?php include "../includes/header.php" ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Register</h1>
        <form action="login_user.php" method="post">
            <label for="username">Username</label>
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter your username here" class="form-control" required>
            </div><br>

            <label for="email">E-mail Address</label>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="name@example.at" required>
            </div><br>

            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" placeholder="Enter your password here" name="password" class="form-control" required>
            </div><br>

            <input class="btn btn-primary" type="submit" name="submit" value="Create">

        </form>
    </div>
</div>

<?php include "../includes/footer.php" ?>