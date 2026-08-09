<?php 
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$file = $_FILES["fileupload"] ?? null; 


echo "Hi, ".$username."</br>";
echo "Your password is ".$password;

$_SESSION["username"] = $username;

$hasUsernameError = $hasPasswordError = true;

if(!$username){
    $_SESSION["usernameError"] = "Username is required";
}else{
   unset($_SESSION["usernameError"]); 
   $hasUsernameError = false;
}

if(!$password){
    $_SESSION["passwordError"] = "Password is required";
}else{
    unset( $_SESSION["passwordError"]);
     $hasPasswordError = false;
}

// if($hasUsernameError || $hasPasswordError){
//     Header("Location: ../View/task.php");
// }

if($file){
    $destinationFolder = "../uploads/";
    $path = $destinationFolder.basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $path);
}

if($username == "rahman" && $password == "123"){
    $_SESSION["loggedInUsername"] = $username;
    $_SESSION["isLoggedIn"] = true;
    Header("Location: ../View/dashboard.php");
}


?>