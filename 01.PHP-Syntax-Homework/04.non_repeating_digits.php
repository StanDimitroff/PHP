<?php
//Write a PHP script NonRepeatingDigits.php that declares an integer variable N, and then finds all 3-digit numbers that are less or equal than N (<= N) and consist of unique digits. Print "no" if no such numbers exist.

function checkNumber($num)
{
    $arr = array();
    for ($i = 102; $i <= 987; $i++) {
        if ($i <= $num) {
            $isUnique = function ($var) {
                $var = (string)$var;
                for ($i = 0; $i < strlen($var); $i++) {
                    if ($var[$i] == $var[$i + 1] && $var[$i] == $var[$i + 1]) {
                        $isUnique = false;
                    }
                }
                return $isUnique;
            };
            if ($isUnique == true) {
                array_push($arr, $i);
            }
        }
    }
    if (count($arr) == 0) {
        print 'no';
    } else {
        print implode(', ', $arr);
    }
}

checkNumber(1234);
checkNumber(145);
checkNumber(15);
checkNumber(247);