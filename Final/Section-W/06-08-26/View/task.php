<?php 
session_start();

$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$username = $_SESSION["username"] ?? "";

unset($_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);
?>


<html>
    <body>
        <form action="../Controller/loginValidation.php" method="post">
            <table>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username;?>"/>
                    </td>
                    <td>
                        <p style="color:red"> <?php echo $usernameError;?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        <input type="password" name="password"/>
                    </td>
                     <td>
                        <p style="color:red"> <?php echo $passwordError;?></p>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <button>Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>