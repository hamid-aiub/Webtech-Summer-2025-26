<?php

session_start();

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$hasUsernameError = true;
$hasPasswordError = true;

$_SESSION["username"] = $username;


if (!$username) {
    $_SESSION["usernameError"] = "Username is required";
    $hasUsernameError = true;
} else {
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}

if (!$password) {
    $_SESSION["passwordError"] = "Password is required";
    $hasPasswordError = true;
} else {
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}

if ($hasUsernameError || $hasPasswordError) {
    Header("Location: ../View/login.php");
} else {
    if ($username == "rahman" && $password == "1234") {
        setcookie("username", $username, time() + 3600, "/");
        $_SESSION["loggedInUser"] = $username;
        $_SESSION["isLoggedIn"] = true;
        Header("Location: ../View/dashboard.php");
    }

}


?>