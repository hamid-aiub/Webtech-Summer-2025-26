<?php

setcookie("section", "Section-W", time() + 3600, "/");

Header("Location: ../View/dashboard.php");
?>