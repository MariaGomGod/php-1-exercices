<?php

// EjercicioSumArrayTest

declare(strict_types=1);

function sumArray(array $array): int {

    /* $sum = 0;

    for($index = 0; $index < sizeof($array); $index++){
        $sum += $array[$index];
    }

    return $sum; */

    return array_sum($array);
}

// EjercicioFindMaxTest

function findMax(array $array): int {

    /* $max = $array[0];

    for($index = 0; $index <= count($array)-1; $index++) {


        if ($array[$index] > $max) {
            $max = $array[$index];
        }
    }
    return $max; */

    return max($array);
}

// EjercicioAgeAverageTest

function averageAge(array $people): float {

    $sum = 0;

    foreach($people as $person) {

        $sum += $person['age'];
        
    }

    $average = $sum / count($people);

    return $average;
}

// EjercicioReverseTest

function reverseString(string $input): string {
    
    return strrev($input);
}