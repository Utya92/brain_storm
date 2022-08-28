<?php

function num8() {
    echo '<br>подходит ';
    for ($i = 1000; $i < 10000; $i++) {
        $correct = true;
        $finalNumber = $i;
        $number = $finalNumber;

        $remain1 = (int) $number % 10;
        $number = (int) $number / 10;
        $remain2 = (int) $number % 10;
        $number = (int) $number / 10;
        $remain3 = (int) $number % 10;
        $number = (int) $number / 10;
        $remain4 = (int) $number % 10;

        if (($remain1 == $remain2) || ($remain1 == $remain3) || ($remain1 == $remain4)) {
            $correct = false;
        }
        if (($remain2 == $remain3) || ($remain2 == $remain4)) {
            $correct = false;
        }
        if ($remain3 == $remain4) {
            $correct = false;
        }
        if ($correct) {
            echo '<br>' . $finalNumber;
        }
    }
}

num8();

