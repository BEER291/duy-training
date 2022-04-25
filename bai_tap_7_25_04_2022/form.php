<html>
    <body>
        <form action="form.php" method="get">
            Nhập 1 số bất kỳ
            <input type="text" name="number">
            <input type="submit">
        </form>
    </body>
</html>
<?php
    
        $n = $_GET["number"];
        $x = 2;
        $test = array();
        for ($i = 0; $i < $n; $i++) {
            if ($i % 2 == 0) {
                $test[] = $x;
                $x = $x - 0.5;
            }
            else {
                $test[] = -1;
            }
        }
        echo "Kết quả là: <br>";
        foreach ($test as $item)
        echo "<$item <br>";
?>