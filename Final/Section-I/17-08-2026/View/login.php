<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;
if ($isLoggedIn) {
    Header("Location: dashboard.php");
}
$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$usernameValue = $_SESSION["username"] ?? "";

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);

?>

<html>

<body>
    <form action="../Controller/loginValidation.php" method="post">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $usernameValue; ?>" /></td>
                    <td>
                        <p style="color:red"><?php echo $usernameError; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" /></td>
                    <td>
                        <p style="color:red"><?php echo $passwordError; ?></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>