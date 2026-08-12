<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}

$username = $_SESSION["loggedInUsername"] ?? "";


?>

<html>

<body>
    <h1>Hi, Mr. <?php echo $username; ?></h1>
    <a href="../Controller/logout.php">Logout</a>
</body>

</html>