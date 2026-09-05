<?php


$hasCookie = false;


if ($hasCookie) {

    echo "<html>

<body>
    <h1>Hi, I am from If Condition</h1>
</body>

</html>";
} else {
    echo "<html>

<body>
    <h1>Hi, I am from Else Condition</h1>
</body>

</html>";
}

?>


<?php

if ($hasCookie) {
    ?>
    <html>

    <body>
        <h1>I am from another universe.</h1>
    </body>

    </html>

    <?php
}
?>