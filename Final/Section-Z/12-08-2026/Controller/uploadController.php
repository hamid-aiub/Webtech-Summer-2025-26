<?php

$file = $_FILES["fileupload"];

if ($file) {
    $uploadDirectory = "../uploads/";
    // image.jpg
    // $path =  "../uploads/image.jpg";
    $path = $uploadDirectory . basename($file["name"]);
    echo "Prepared Path: $path";
    move_uploaded_file($file["tmp_name"], $path);
}


?>