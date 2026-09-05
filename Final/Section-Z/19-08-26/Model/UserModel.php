<?php
class UserModel
{

    function createUser($username, $password, $file_path)
    {
        $database = new DatabaseConnection();
        $connection = $database->openConnection();
        $result = $database->signup($connection, "users", $username, $password, $file_path);
        return $result;
    }
}


?>