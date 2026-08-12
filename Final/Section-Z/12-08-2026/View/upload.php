<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if ($isLoggedIn) {
    Header("Location: dashboard.php");
}


?>

<html>

<body>
    <form action="../Controller/uploadController.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileupload" />
        <input type="submit" value="Submit">
    </form>
</body>

</html>