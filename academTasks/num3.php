<?php

function num3() {
    $number = (int) 12346;
    $correct = true;
    do {
        if ($number !== 0) {
            $out1 = $number % 10;
            $number = (int) $number / 10;
            $out2 = $number % 10;
            if ($out1 < $out2) {
                $correct = false;
                break;
            }
        }
    } while ($number !== 0);

    echo $correct ? "true" : "false";
}

num3();