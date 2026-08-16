<?php
session_start();

$username = $_SESSION["loggedInUsername"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if (!$isLoggedIn) {
    Header("Location: login.php");
}

$isCookieSet = isset($_COOKIE["food"]);
$cookieValue = $_COOKIE["food"] ?? "";

?>

<html>

<body></body>
<h1>Welcome, <?php echo $username; ?>!</h1>
<p>You are successfully logged in.</p>

<p>Cookie Set Status: <?php echo $isCookieSet; ?></p>
<p>Cookie Value: <?php echo $cookieValue; ?></p>

<?php

if (!$isCookieSet) {
    echo "<form action='../Controller/AddFavoriteFood.php' method='post'>
    <input type='text' name='food' />
    <button>Add Favorite Food</button>
</form>";
} else {
    echo "<p>Hi, We know about your favorite food, $cookieValue</p>";
}

?>




<a href="../Controller/addCookie.php">Click me to add cookie</a>


<a href="../Controller/logout.php">Logout</a>
</body>

</html>