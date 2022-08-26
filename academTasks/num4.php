<?php

function num4() {
    for ($i = 1000; $i < 9999; $i += 2) {
        $correctASC = true;
        $correctDESC = true;
        $finalNumber = $i;
        $number = $finalNumber;

        $remain1 = (int) $number % 10;
        $number = (int) $number / 10;

        while ($number >= 1) {
            $remain2 = (int) $number % 10;
            $number = (int) $number / 10;
            if ($remain1 <= $remain2) {
                $correctASC = false;
            }
            if ($remain1 >= $remain2) {
                $correctDESC = false;
            }
            $remain1 = $remain2;
        }
        if ($correctASC) {
            echo '<br>подходит по возрастанию ' . $finalNumber;
        }
        if ($correctDESC) {
            echo '<br>подходит по убыванию ' . $finalNumber;
        }
    }
}

num4();

