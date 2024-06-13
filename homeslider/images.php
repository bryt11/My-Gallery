<?php
$images = glob("../images/*.jpg");

foreach ($images as $image) {
    echo "<img src='$image' alt='Slider Image'>";
}
