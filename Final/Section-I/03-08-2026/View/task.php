
<?php 
session_start();
$universities = array("AIUB", "BRAC", "NSU", "DIU");
var_dump($universities);

$cars = array("name"=>"BMW", "color"=>"Black", "model"=>"2020");

foreach($cars as $key=>$value){
    echo "</br>$key is $value</br>";
}


$usernameError = $_SESSION["usernameError"] ?? "";
$passwordError = $_SESSION["passwordError"] ?? "";
$usernameValue = $_SESSION["username"] ?? "";

unset( $_SESSION["usernameError"]);
unset($_SESSION["passwordError"]);
unset($_SESSION["username"]);

?>

<html>
    <body>
        <form  action="../Controller/loginValidation.php" method="post">
           <fieldset>
            <legend>Login</legend>
             <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $usernameValue;?>"/></td>
                    <td><p style="color:red"><?php echo $usernameError;?></p></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"/></td>
                     <td><p style="color:red"><?php echo $passwordError;?></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"/></td>
                </tr>
            </table>
           </fieldset>
        </form>
    </body>
</html>