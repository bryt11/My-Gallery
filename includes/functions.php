<?php include "../mysql/db.php" ?>

<?php
function createUser()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $email = mysqli_real_escape_string($connection, $email);

        $hashFormat = "$2y$10$";
        $salt = "iusecomecrazystrings24";
        $hashF_and_salt = $hashFormat . $salt;

        $password = crypt($password, $hashF_and_salt);

        $query = 'INSERT INTO users(username,password,email) ';
        $query .= "VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        }
    }
}

// Read data
function readAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($result));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}


// Update user
function updateRow()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password', ";
        $query .= "email = '$email' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {
            echo "Record Updated";
        }
    }
}


// Delete user
function deleteUser()
{
    if (isset($_POST['submit'])) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }
}

function showAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Failed' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
