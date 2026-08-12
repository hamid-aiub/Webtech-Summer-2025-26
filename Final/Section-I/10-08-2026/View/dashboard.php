<?php
session_start();

$username = $_SESSION["loggedInUser"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}


?>

<html>

<body>
    <h2>Welcome Mr <?php echo $username; ?></h2>
    <a href="../Controller/logout.php">Logout</a>
</body>

</html>