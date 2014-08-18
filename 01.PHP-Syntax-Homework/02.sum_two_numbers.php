<?php
//Write a PHP script SumTwoNumbers.php that declares two variables, firstNumber and secondNumber. They should hold integer or floating-point numbers (hard-coded values). Print their sum in the output in the format shown in the examples below. The numbers should be rounded to the second number after the decimal point. Find in Internet how to round a given number in PHP.

function sumNumbers($first, $second)
{
    echo number_format($first + $second ,2, '.', '') . "\n";
}

sumNumbers(2, 5);
sumNumbers(1.567808, 0.356);
sumNumbers(1234.5678, 333);