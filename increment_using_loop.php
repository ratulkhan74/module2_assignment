<?php
// Task 1: Looping with Increment using a Function

// Printing even number using for loop
function printEvenNumbersWithForLoop($start, $end, $stap)
{
    for ($i = $start; $i <= $end; $i += $stap) {
        echo $i . "\n";
    }
}
printEvenNumbersWithForLoop(2, 20, 2); // Calling the function

echo PHP_EOL;

// Printing even number using While loop
function printEvenNumbersWithWhileLoop($start, $end, $stap)
{
    while ($start <= $end) {
        echo $start . "\n";
        $start += $stap;
    }
}

printEvenNumbersWithWhileLoop(2, 20, 2); // Calling the function

echo PHP_EOL;

// Printing even number using Do While loop
function printEvenNumbersWithDoWhileLoop($start, $end, $stap)
{
    do {
        echo $start . "\n";
        $start += $stap;
    } while ($start <= $end);
}

printEvenNumbersWithDoWhileLoop(2, 20, 2); // Calling the function
