<?php
session_start();

if (!isset($_SESSION['click_count'])) {
    $_SESSION['click_count'] = 0;
    $_SESSION['val'] = 15;
    $_SESSION['nums'] = [4, 7, 2];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_click'])) {
    $_SESSION['click_count']++;
    $count = $_SESSION['click_count'];

    switch ($count) {
        case 1:
            $ans = ($_SESSION['val']-- % 4) + (++$_SESSION['nums'][0] * 2);
            echo "Click 1 Output : " . $ans . " | Val : " . $_SESSION['val'];
            break;

        case 2:
            $_SESSION['val'] = ($_SESSION['val'] > 10) ? ($_SESSION['val'] - 5) : ($_SESSION['val'] * 2);
            $sum = array_sum($_SESSION['nums']) + $_SESSION['val'];
            echo "Click 2 Output : " . $sum;
            break;

        case 3:
            $_SESSION['nums'][1] = $_SESSION['nums'][1] + ($_SESSION['val'] % 3);
            // val is pre-decremented
            $ans = ($_SESSION['nums'][1] * $_SESSION['nums'][2]) + --$_SESSION['val'];
            echo "Click 3 Output : " . $ans;
            break;

        case 4:
            // nums[1] is post-incremented
            $ans = ($_SESSION['val'] * $_SESSION['nums'][0]) - $_SESSION['nums'][1]++;
            echo "Click 4 Output : " . $ans . " | Nums [1]: " . $_SESSION['nums'][1];
            break;

        case 5:
            $total = 0;
            foreach ($_SESSION['nums'] as $idx => $n) {
                $total += ($n * ($idx + 1));
            }
            echo "Click 5 Output : " . ($total + $_SESSION['val']);

            // Reset counter after click 5 so it can be re-tested
            session_destroy();
            break;
    }
}
?>

<html>

<body>
    <form action="controller.php" method="POST">
        <button type="submit" name="btn_click"> Perform Action </ button>
            </ form>
</body>

</html>