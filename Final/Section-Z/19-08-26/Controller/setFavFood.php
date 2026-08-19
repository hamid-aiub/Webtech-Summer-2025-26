<?php

$food = $_POST["food"] ?? "";

setcookie("favoriteFood", $food, time() + 3600 * 24 * 30, "/");

Header("Location: ../View/dashboard.php");
?>