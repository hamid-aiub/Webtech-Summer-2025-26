<?php
session_start();

$username = $_SESSION["loggedInUsername"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}

$isCookieSet = isset($_COOKIE["favoriteFood"]);

$favFood = $_COOKIE["favoriteFood"] ?? "";


?>

<html>

<body></body>
<h1>Welcome, <?php echo $username; ?>!</h1>
<p>You are successfully logged in.</p>

<p>Cookie Set :
    <?php echo $isCookieSet ? "Yes" : "No"; ?>
</p>

<p>Favorite Food :
    <?php echo $favFood; ?>
</p>

<a href="../Controller/addCookieController.php">Click To Add Cookie</a>
<a href="../Controller/logout.php">Logout</a>
</body>

</html>