<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if ($isLoggedIn) {
    Header("Location: dashboard.php");
}


$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$username = $_SESSION["username"] ?? "";

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);


?>

<html>

<body>
    <form action="../Controller/loginValidation.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <p style="color:red"><?php echo $usernameError; ?></p>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <p style="color:red"><?php echo $passwordError; ?></p>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>