<?php

$n = 6;

for ( $i = $n, $factotial = 1; $i > 1; $i-- ) {
    // $factotial = $factotial*$i;
    $factotial *= $i;
}
echo "Factorial of {$n} is {$factotial}";