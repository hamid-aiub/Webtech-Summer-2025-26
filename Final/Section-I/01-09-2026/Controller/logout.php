<?php
session_start();

session_destroy();

setcookie("username", "", time() - 1, "/");

Header("Location: ../View/login.php");


?>