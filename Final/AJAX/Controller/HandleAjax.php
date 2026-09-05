<?php
include "../Model/DatabaseConnection.php";

$username = $_POST["username"];

if (!$username) {
    echo "Please provide your username";
} else {

    $db = new DatabaseConnection();
    $connection = $db->openConnection();
    $result = $db->checkExistingUserByUsername($connection, "users", $username);
    if ($result->num_rows > 0) {
        echo "Username already taken";
    } else {
        echo "Username is available";
    }
}

?>