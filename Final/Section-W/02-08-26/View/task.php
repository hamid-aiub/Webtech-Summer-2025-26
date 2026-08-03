<?php 
 echo "<h1>Hello world</h1>";

 $cars = array("Volvo", "BMW", "Toyota");

var_dump($cars);

 $newCars = array("name"=>"Volvo", "color"=>"black", "year"=>2019);

echo "</br>";
foreach($newCars as $x=>$y){
    echo $x. " is " . $y . "</br>"; 
}


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
                        <input type="text" name="username"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        <input type="password" name="password"/>
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