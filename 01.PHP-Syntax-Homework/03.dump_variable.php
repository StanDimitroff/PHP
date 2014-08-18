<?php
//Write a PHP script DumpVariable.php that declares a variable. If the variable is numeric, print it by the built-in function var_dump(). If the variable is not numeric, print its type at the input.

function isNumeric($var)
{
    if (is_numeric($var)) {
        var_dump($var);
    } else {
        echo gettype($var) . "\n";
    }
}

isNumeric('hello');
isNumeric(15);
isNumeric(1.234);
isNumeric(array(1, 2, 3));
isNumeric((object)[2, 34]);