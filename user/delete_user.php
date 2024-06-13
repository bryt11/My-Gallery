<?php include "../mysql/db.php"; ?>
<?php include "../includes/functions.php"; ?>
<?php deleteUser(); ?>


<?php include "../includes/header.php" ?>


<div class="container">
    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>
        <form action="delete_user.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <label for="email">Email</label>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
            </div>

            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" class="form-control">
            </div><br>

            <div class="form-group">
                <select name="id" id="">
                    <?php showAllData(); ?>
                </select> <br> <br>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Delete">


        </form>

    </div>
</div>
<?php include "../includes/footer.php" ?>