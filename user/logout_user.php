<?php
session_start();
session_destroy();
header("Location: ../homeslider/index.php");
exit;
