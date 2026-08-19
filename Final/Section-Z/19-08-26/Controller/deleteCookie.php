<?php

setcookie("favoriteFood", "Pizza", time() - 1, "/");

Header("Location: ../View/dashboard.php");
?>