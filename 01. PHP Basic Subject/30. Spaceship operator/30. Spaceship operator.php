<?php
// Function Method
$x = 2;
$y = 3;

function greaterOrSmaller( $x, $y ) {

    if ( $x > $y ) {
        return 1;
    }

    if ( $x == $y ) {
        return 0;
    }

    if ( $x < $y ) {
        return -1;
    }

}

if ( greaterOrSmaller( $x, $y ) == 1 ) {
    echo "{$x} is greater then {$y}";
} elseif ( greaterOrSmaller( $x, $y ) == 0 ) {
    echo "{$x} is equal to {$y}";
} elseif ( greaterOrSmaller( $x, $y ) == -1 ) {
    echo "{$x} is smaller then {$y}";
}

echo PHP_EOL;
//spaceship or combined comperition operator

$result = $x <=> $y; //$x<$y= -1; $x=$y= 0; $x>$y= 1; 

if ( $result == 1 ) {
    echo "{$x} is greater then {$y}";
} elseif ( $result == 0 ) {
    echo "{$x} is equal to {$y}";
} elseif ( $result == -1 ) {
    echo "{$x} is smaller then {$y}";
}
