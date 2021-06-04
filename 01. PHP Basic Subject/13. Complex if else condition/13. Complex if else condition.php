<?php
// Leap year calculation

$year = 1988;

if ( 0 == $year % 4 && 0 == $year % 100 && 0 == $year % 400 ) {
    echo "{$year} is a leap year";
} elseif ( 0 == $year % 4 && 0 == $year % 100 ) {
    echo "{$year} is not a leap year";
} elseif ( 0 == $year % 4 ) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}
echo PHP_EOL;

// shortcut

if ( 0 == $year % 4 && (400 == $year % 400 || 0 != $year % 100 )) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}
