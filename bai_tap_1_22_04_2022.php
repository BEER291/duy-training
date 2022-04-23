<?php
    $n = 5;
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
    echo "$test[0]<br>$test[1]<br>$test[2]<br>$test[3]<br>$test[4]";
?>
