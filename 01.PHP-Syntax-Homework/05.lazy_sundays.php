<?php
//Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month.
$day=1;
$month = date("F");
$year = date("Y");
$maxDays = date("t");

for($i = $day; $day <= $maxDays; $day++) {
    $date = strtotime("$day $month $year");
    if(date("l", $date) == "Sunday") {
        echo date("jS F, Y", $date) . "\n";
    }
}