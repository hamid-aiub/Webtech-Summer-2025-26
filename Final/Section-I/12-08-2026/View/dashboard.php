<?php
session_start();

$username = $_SESSION["loggedInUser"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}

$isSetCookie = isset($_COOKIE["username"]);

$usernameFromCookie = $_COOKIE["username"] ?? "";


?>

<html>

<body>
    <h2>Welcome Mr <?php echo $username; ?></h2>
    <p>Value from cookie :
        <?php echo $usernameFromCookie; ?>
    </p>
    <a href="../Controller/logout.php">Logout</a>
</body>

</html>