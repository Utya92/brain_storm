<?php

function num6() {
    echo '<br>подходит: ';
    for ($i = 2000; $i <= 7777; $i++) {
        $correct = true;
        $finalNumber = $i;
        $number = $finalNumber;

        while ($number >= 1) {
            $remain = ((int) $number % 10);
            $number = (int) $number / 10;
            if ($remain != 0 and $remain != 2 and $remain != 3 and $remain != 7) {
                $correct = false;
                break;
            }
        }
        if ($correct) {
            echo '<br>' . $finalNumber;
        }
    }
}

echo num6();