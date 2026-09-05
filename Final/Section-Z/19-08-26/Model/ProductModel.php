<?php

class ProductModel
{
    function createProduct($name, $price, $file_path)
    {
        $database = new DatabaseConnection();
        $connection = $database->openConnection();
        $result = $database->signup($connection, "products", $name, $price, $file_path);
        return $result;
    }
}
?>