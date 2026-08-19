<?php

class DatabaseConnection
{

    function openConnection()
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "123456"; // "" for all of you
        $db_name = "section_z";

        $connection = new mysqli($db_host, $db_user, $db_password, $db_name);
        if ($connection->connect_error) {
            die("Failed to connect database. " . $connection->connect_error);
        }
        return $connection;

    }

    function signup($connection, $tableName, $username, $password, $file_path)
    {

        // $sql = "INSERT INTO $tableName (username, password, file_path) VALUES($username, $password, $file_path)";

        $sql = "INSERT INTO $tableName (username, password, file_path) VALUES('" . $username . "', '" . $password . "', '" . $file_path . "')";
        $result = $connection->query($sql);
        return $result;
    }
}


?>