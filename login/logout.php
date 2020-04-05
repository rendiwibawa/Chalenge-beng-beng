<?php
session_start();

session_destroy();
header("Location: http://localhost/nilai/login/index.php");

?>
