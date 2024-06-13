<?php include "../includes/header.php" ?>

<div class="container">
  <div class="col-sm-6">
    <h1 class="text-center-gallery-class">My Gallery</h1><br>
    <h4 class="text-center">Sign up to see <span class="text-to-red">photos</span> and <span class="text-to-red">feeds</span> from your friends.</h4><br><br>




    <div class="slider">
      <div class="slides">

        <?php
        include 'images.php';

        ?>
      </div>
    </div>
    <br>
    <p class="text-center"><a href="../user/login_user.php">Log In</a><span class="or-text"> or </span> <a href="../user/register_user.php">Sign Up</a></p>
  </div>
</div>

<script src="script.js"></script>

<?php include "../includes/footer.php" ?>