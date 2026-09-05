<?php
session_start();
$usernameError = $_SESSION["usernameErr"] ?? "";
$passwordError = $_SESSION["passwordErr"] ?? "";

$username = $_SESSION["username"] ?? "";
$password = $_SESSION["password"] ?? "";

$loginErr = $_SESSION["loginErr"] ?? "";

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if ($isLoggedIn) {
    Header("Location: dashboard.php");
    exit();
}

unset($_SESSION["usernameErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($_SESSION["loginErr"]);

?>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    <head>
        <script src="../Controller/JS/checkUsername.js"></script>
    </head>

    <form method="post" action="../Controller/RegistrationValidation.php" enctype="multipart/form-data">

        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" placeholder="Enter username"
                        value="<?php echo $username; ?>" onkeyup="checkUsername()" /> </td>
                <td><?php echo "$usernameError"; ?>
                    <p id="usernameResponse"></p>
                </td>

            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter password"
                        value="<?php echo $password; ?>" /> </td>
                <td>
                    <p style='color:red;'><?php echo "$passwordError"; ?></p>
                </td>
            </tr>
            <tr>
                <td>Upload File</td>
                <td><input type="file" name="fileupload" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p style='color:red;'><?php echo "$loginErr"; ?></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Already have an account? <a href='login.php'>Login </a> Here</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" /> </td>
            </tr>
        </table>
    </form>
</body>

</html>