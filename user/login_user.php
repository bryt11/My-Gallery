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
        echo "Wrong username or password";
        die("QUERY FAILED" . mysqli_error($connection));
    }


    while ($row = mysqli_fetch_array($select_user_query)) {
        $db_id = $row['id'];
        $db_username = $row['username'];
        $db_password = $row['password'];
    }

    if ($username !== $db_username && $password !== $db_password) {
        header("Location: login_user.php");
    } else if ($username === $db_username && $password === $db_password) {
        header("Location: loggedin_user.php");
    } else {
        echo "Username or password is wrong";
    }
}

?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Login</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter your username here" class="form-control" required>
            </div><br>
            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" placeholder="Enter your password here" name="password" class="form-control" required>
            </div><br>

            <input class="btn btn-primary" type="submit" name="login" value="Login">
            <span>Don't have an account? <span><a href="../user/register_user.php">Sign Up</a></span></span>

        </form>
    </div>
</div>

<?php include "../includes/footer.php" ?>