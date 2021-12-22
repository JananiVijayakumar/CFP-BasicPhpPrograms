<?php
$leapYear = readline('Enter a year: ');
if ((0 == $leapYear % 4) & (0 != $leapYear % 100)) {
    echo "$leapYear is Leap Year.";
} elseif ((0 == $leapYear % 400)) {
    echo "$leapYear is Leap Year.";
} else {
    echo "$leapYear is not a Leap Year.";
}
