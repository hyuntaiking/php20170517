<?php
function isLeapYear($year) {
    $result = false;
    if ($year < 1752) {
        if ($year % 4 == 0) {
            $result = true;
        }
    } else {
        if ($year % 4   == 0 && $year % 100  <> 0 ||
            $year % 400 == 0 && $year % 4000 <> 0) {
            $result = true;
        }
    }
    return $result;
}
function getDaysOfMonth($year, $month) {
    switch($month) {
        case 2:
            if (isLeapYear($year)) {
                return 29;
            } else {
                return 28;
            }
        case 4: case 6: case 11:
            return 30;
        default:
            return 31;
    }
}
$days = getDaysOfMonth(2017,5);
echo $days;