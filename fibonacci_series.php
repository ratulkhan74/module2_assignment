<?php

// Task 4: Fibonacci Series printing using a Function


function printFibonacciSeries($number)
{
    $oldNumber = 0;
    $currentNumber = 1;
    $newNumber = 1;
    for ($i = 0; $i < $number; $i++) {
        echo $oldNumber . "\n";
        $currentNumber = $newNumber;
        $newNumber = $currentNumber + $oldNumber;
        $oldNumber = $currentNumber;
    }
}

printFibonacciSeries(15); // Output
