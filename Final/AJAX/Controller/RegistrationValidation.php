<?php 
include "../Model/DatabaseConnection.php";
session_start();

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$file = $_FILES["fileupload"] ?? null;


$hasUsernameError = true;
$hasPasswordError = true;
echo "<h1>Hello Mr, $username</h1>";
echo "<h3>We know your password...$password, right?</h3>";

if(!$username){
    $_SESSION["usernameErr"] = "Username is required";
    $hasUsernameError = true;
}else{
    unset($_SESSION["usernameErr"]);
    $hasUsernameError = false;
}

if(!$password){
    $_SESSION["passwordErr"] = "Password is required";
    $hasPasswordError = true;
}else{
   unset($_SESSION["passwordErr"]); 
   $hasPasswordError = false;
}

if($hasUsernameError || $hasPasswordError){
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    Header("Location: ../View/login.php");
}else{

    $path = "";
    if($file){
    $uploadDirectory = "../uploads/";
    $path = $uploadDirectory.basename($file["name"]);
    echo "Printing file path..".$path;
    $res = move_uploaded_file($file["tmp_name"], $path);
}
    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->CreateUser($connection, "users", $username, $password, $path);
    if($result){
        Header("Location: ../View/login.php");
    }

}

?>