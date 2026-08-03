<?php 

session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$hasUsernameError = true;
$hasPasswordError = true;

$_SESSION["username"] = $username;

echo "Hi <b>$username</b>, We can see your password => <b>$password</b>";
if(!$username){
$_SESSION["usernameError"] = "Username is required";
$hasUsernameError = true;
}else{
$_SESSION["usernameError"] = "";
$hasUsernameError = false;
}

if(!$password){
    $_SESSION["passwordError"] = "Password is required";
    $hasPasswordError = true;
}else{
    $_SESSION["passwordError"] = "";
    $hasPasswordError = false;
}

if($hasUsernameError || $hasPasswordError){
Header("Location: ../View/task.php");
}else{
Header("Location: ../View/dashboard.php");
}


?>