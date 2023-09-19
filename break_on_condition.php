<?php

// Task 3: Break on Condition

$oldNumber = 0;
$currentNumber = 1;
$newNumber = 1;

// calculating first 10 Fibonacci numbers using for loop
for ($i = 0; $i <= 10; $i++) {
    echo $oldNumber . "\n";
    $currentNumber = $newNumber;
    $newNumber = $currentNumber + $oldNumber;
    $oldNumber = $currentNumber;
    // Checking Fibonacci number is greater than 100
    if ($newNumber > 100) {
        break;
    }
}
