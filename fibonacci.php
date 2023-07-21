<?php

function Calculatingfibonacci($n) {
    $sequenceArray = [];

    if ($n == 1) {
        $sequenceArray[] = 0;
    } elseif ($n == 2) {
        $sequenceArray = [0, 1];
    } else {
        $sequenceArray = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $sequenceArray[] = $sequenceArray[$i - 1] + $sequenceArray[$i - 2];
        }
    }

    return $sequenceArray;
}


$fibonacciSequenceNumberTerm = 15;
$fibonacciSequence = Calculatingfibonacci($fibonacciSequenceNumberTerm);
print_r($fibonacciSequence);