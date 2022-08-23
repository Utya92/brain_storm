<?php

function num5() {

    $number = 419538;
    $new_number = 0;
    do {
        $remain = $number % 10;
        $new_number = $new_number * 10 + $remain;
        $number = (int) $number / 10;

    } while ($number !== 0);
    $new_number = $new_number / 10;
    echo '<br>результат: ' . $new_number;
}

num5();