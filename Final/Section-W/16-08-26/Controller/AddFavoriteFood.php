<?php

$foodName = $_POST["food"];

setcookie("food", $foodName, time() + 3600, "/");

Header("Location: ../View/dashboard.php");
?>