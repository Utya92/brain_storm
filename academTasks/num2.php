<?php

//возвращает кол-во цифр в числе,вынес в отдельный метод дабы dry не нарушить
function getSumNumber($number): int {
    $sum = 0;
    do {
        $sum += $number % 10;
    } while ($number = (int) $number / 10);
    return $sum;
}

function num2($number) {
    $mainSum = getSumNumber($number);
    for ($i = 1000; $i < 9999; $i++) {
        if (getSumNumber($i) === $mainSum) {
            echo $i;
            echo "<br>";
        }
    }
}

num2(1335);