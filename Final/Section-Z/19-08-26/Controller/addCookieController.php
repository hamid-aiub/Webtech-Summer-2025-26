<?php

setcookie("favoriteFood", "Pizza", time() + 3600 * 24 * 30, "/");

Header("Location: ../View/dashboard.php");
?>