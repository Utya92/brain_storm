<?php

function num7() {
    $number = 150384;
    $isRepeated = false;
    while ($number > 0) {
        $remain = (int) $number % 10;
        $number = (int) $number / 10;
        $testNumber = (int) $number; // 15835
        echo '<br>внешний ' . $testNumber;
        echo '<br>внешний remain ' . $remain;
        while ($testNumber > 0) {
            echo '<br>внутренний ' . $testNumber;
            $remainTestNumber = (int) $testNumber % 10;
            echo '<br>внутренний remain ' . $remainTestNumber;
            if ($remainTestNumber == $remain) {
                $isRepeated = true;
                echo "<br>в числе есть повторение " . "$remain";
                break;
            }
            $testNumber = (int) ((int) $testNumber / 10);
        };
        echo '<br>';
        if ($isRepeated) {
            break;
        }
    }
}

num7();