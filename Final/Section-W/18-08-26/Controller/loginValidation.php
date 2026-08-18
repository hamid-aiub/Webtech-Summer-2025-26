<?php
include "../Model/DatabaseConnection.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$file = $_FILES["fileupload"] ?? null;


echo "Hi, " . $username . "</br>";
echo "Your password is " . $password;

$_SESSION["username"] = $username;

$hasUsernameError = $hasPasswordError = true;

if (!$username) {
    $_SESSION["usernameError"] = "Username is required";
} else {
    unset($_SESSION["usernameError"]);
    $hasUsernameError = false;
}

if (!$password) {
    $_SESSION["passwordError"] = "Password is required";
} else {
    unset($_SESSION["passwordError"]);
    $hasPasswordError = false;
}

if ($hasUsernameError || $hasPasswordError) {
    Header("Location: ../View/login.php");
} else {

    // $jsonfile = "../Model/users.json";
    // $users = [];
    // if (file_exists($jsonfile)) {
    //     $jsonData = file_get_contents($jsonfile);
    //     $users = json_decode($jsonData, true) ?? [];
    //     $isFound = false;
    //     foreach ($users as $user) {
    //         if ($user['username'] == $username && password_verify($password, $user['password'])) {
    // $isFound = true;
    // setcookie("username", $username, time() + 3600, "/");
    // $_SESSION["loggedInUsername"] = $username;
    // $_SESSION["isLoggedIn"] = true;
    // Header("Location: ../View/dashboard.php");
    // exit();
    //         }
    //     }
    // if (!$isFound) {
    //     $_SESSION["loginFailMessage"] = "Username or password is incorrect!";
    //     Header("Location: ../View/login.php");
    // }

    // }

    $database = new DatabaseConnection();
    $connection = $database->openConnection();
    $result = $database->signin($connection, "users", $username, $password);

    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            // echo json_encode($row);
            $isFound = true;
            setcookie("username", $username, time() + 3600, "/");
            $_SESSION["loggedInUsername"] = $row["username"];
            $_SESSION["file_path"] = $row["file_path"];
            $_SESSION["isLoggedIn"] = true;
            Header("Location: ../View/dashboard.php");
            exit();
        }



    }
    if (!$isFound) {
        $_SESSION["loginFailMessage"] = "Username or password is incorrect!";
        Header("Location: ../View/login.php");
    }
}





?>