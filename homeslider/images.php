<?php
$images = glob("../images/*.jpg"); // Fetch all .jpg images from the 'images' directory

foreach ($images as $image) {
    echo "<img src='$image' alt='Slider Image'>";
}
// // echo "<img src='$images' >";
