<?php
    $n = 5;
    $x = 2;
    $y = -1;
    $test = array();
    for ($i = 0; $i < $n; $i++) {
        $u = $i % 2;
        if ($u == 0) {
            $test[] = $x;
            $x = $x - 0.5;
        }
        else {
            $test[] = $y;
        }
    }
    echo "$test[0]<br>$test[1]<br>$test[2]<br>$test[3]<br>$test[4]";
?>