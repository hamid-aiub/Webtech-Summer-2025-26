<?php
session_start();

$isLoggedIn = $_SESSION["isLoggedIn"] ?? false;

if ($isLoggedIn) {
    Header("Location: dashboard.php");
}

$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$username = $_SESSION["username"] ?? "";
$loginMessage = $_SESSION["loginFailMessage"] ?? "";

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);
unset($_SESSION["loginFailMessage"]);
?>


<html>

<body>
    <form action="../Controller/loginValidation.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" value="<?php echo $username; ?>" />
                </td>
                <td>
                    <p style="color:red"> <?php echo $usernameError; ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    password
                </td>
                <td>
                    <input type="password" name="password" />
                </td>
                <td>
                    <p style="color:red"> <?php echo $passwordError; ?></p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <p style="color:red;"><?php echo $loginMessage; ?></p>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button>Login</button>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Don't have an account? Click <a href="registration.php">Here</a> to Register</td>
            </tr>
        </table>
    </form>
</body>

</html>