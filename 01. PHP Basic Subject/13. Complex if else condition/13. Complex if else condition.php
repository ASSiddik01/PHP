<?php
// Leap year calculation

$year = 1900;

if ( 0 == $year % 4 && 0 == $year % 100 && 0 == $year % 400 ) {
    echo "{$year} is a leap year";
} elseif ( 0 == $year % 4 && 0 == $year % 100 ) {
    echo "{$year} is not a leap year";
} elseif ( 0 == $year % 0 ) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}
