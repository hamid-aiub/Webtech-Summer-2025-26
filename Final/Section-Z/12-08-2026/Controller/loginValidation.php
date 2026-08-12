<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];


$_SESSION["username"] = $username;

echo "Hi <b>$username</b>, is it your password? <b>$password</b>";

$hasUsernameError = true;
$hasPasswordError = true;

if (!$username) {
    $_SESSION["usernameError"] = "Username is required!";
} else {
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}

if (!$password) {
    $_SESSION["passwordError"] = "Password is required!";
} else {
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}

if ($hasUsernameError || $hasPasswordError) {
    Header("Location: ../View/login.php");
} else {
    if ($username == "admin" && $password == "password") {
        $_SESSION["loggedInUsername"] = $username;
        $_SESSION["isLoggedIn"] = true;
        Header("Location: ../View/dashboard.php");
    }
}



?>