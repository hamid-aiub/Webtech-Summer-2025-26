<?php
session_start();

$username = $_SESSION["loggedInUsername"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}

$isCookieSet = isset($_COOKIE["section"]);
$cookieValue = $_COOKIE["section"] ?? "";

?>

<html>

<body></body>
<h1>Welcome, <?php echo $username; ?>!</h1>
<p>You are successfully logged in.</p>

<p>Cookie Set Status: <?php echo $isCookieSet; ?></p>
<p>Cookie Value: <?php echo $cookieValue; ?></p>

<a href="../Controller/addCookie.php">Click me to add cookie</a>


<a href="../Controller/logout.php">Logout</a>
</body>

</html>