<?php
function num1() {
    $number = 1834;
    $counter = 0;
    while ($number >= 1) {
        $n = $number % 10;
        echo $n;
        echo '<br>';
        if ($n < 5) {
            $counter++;
            echo '+';
            echo '<br>';
        }
        $number = (int) $number / 10;
        echo "number" . (int) $number;
        echo '<br>';
    }
    echo 'counter';
    echo $counter;
}

num1();