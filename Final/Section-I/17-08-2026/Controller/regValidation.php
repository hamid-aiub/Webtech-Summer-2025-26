<?php
include "../Model/DatabaseConnection.php";

session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$file = $_FILES["fileupload"] ?? null;

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
    Header("Location: ../View/registration.php");
} else {
    $path = "";
    if ($file) {
        $uploadDirectory = "../uploads/";
        $path = $uploadDirectory . basename(($file["name"]));
        move_uploaded_file($file["tmp_name"], $path);
    }

    $database = new DatabaseConnection();
    $connection = $database->openConnection();
    $result = $database->signup($connection, "users", $username, $password, $path);
    if ($result) {
        Header("Location: ../View/login.php");
    } else {
        echo "Failed to signup";
    }

}


?>