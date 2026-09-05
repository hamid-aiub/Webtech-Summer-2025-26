<?php 
class DatabaseConnection{
    function openConnection(){
        $db_host = "localhost";
        $db_username = "root";
        $db_password = "123456";
        $db_name = "section_e";
        $connection = new mysqli($db_host, $db_username, $db_password, $db_name);

        if($connection->connect_error){
            die("Could not connect to the database. Please try again with different parameters. Original Error ".$connection->connect_error);
        }
        return $connection;

    }

    function CreateUser($connection, $tableName, $username, $password, $image_path){
        $sql = "INSERT INTO $tableName (username, password, image_path) VALUES('". $username."', '".$password."', '".$image_path."')";

        $result = $connection->query($sql);

        return $result;
    }

    function Login($connection, $tableName, $username, $password){
        $sql = "SELECT * FROM $tableName WHERE username = '".$username."' AND password = '".$password."'";
        $result = $connection->query($sql);
        return $result;
    }

    function checkExistingUserByUsername($connection, $tableName, $username){
        $sql = "SELECT * FROM $tableName WHERE username = '".$username."'";
        $result = $connection->query($sql);
        return $result;
    }

    function getAllUsers($connection, $tableName){
        $sql = "SELECT * FROM $tableName";
        $result = $connection->query($sql);
        return $result;
    }

    // Prevent SQL Injection by using prepared statements
    function LoginWithPrepareStmt($connection, $tableName, $username, $password){
        $sql = "SELECT * FROM $tableName WHERE username = ? AND password = ?";
        $statement = $connection->prepare($sql);
        $statement->bind_param("ss",$username, $password);
        $statement->execute();
        $result = $statement->get_result();
        return $result;
    }
}

?>