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


<?php
if ($isCookieSet) {
    echo "<p>Hi, We know your favorite Food, $favFood</p>";
} else {
    echo "<p>Hi, Please enter your favorite food.</p>";
    echo "<form action='../Controller/setFavFood.php' method='post'>
    <input type='text' name='food' />
    <input type='submit' value='Submit' />
</form>";
}


?>




<a href="../Controller/addCookieController.php">Click To Add Cookie</a>
<a href="../Controller/logout.php">Logout</a>
</body>

</html>