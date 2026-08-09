<?php 
session_start();

$username = $_SESSION["loggedInUsername"] ?? "";
$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if(!$isLoggedIn){
    Header("Location: task.php");
}

?>

<html>
    <body></body>
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <p>You are successfully logged in.</p>
        <a href="../Controller/logout.php">Logout</a>
    </body>
</html>