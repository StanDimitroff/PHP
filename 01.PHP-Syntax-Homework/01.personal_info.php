<?php
//Write a PHP script PersonalInfo.php. Declare a few variables. The first variable should hold your first name, the second should hold your last name, the third - your age, and the last one should hold your full name (use concatenation). The result should be printed.

function printInfo($firstName, $lastName, $age)
{
    echo "My name is $firstName $lastName and I am $age years old.\n";
}

printInfo('Mister', 'Dakman', 21);
printInfo('Pesho', 'Peshev', 55);