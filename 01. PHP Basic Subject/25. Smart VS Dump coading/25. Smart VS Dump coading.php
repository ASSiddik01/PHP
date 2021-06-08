<?php
//Dump coading
$j = 1;
$a = 1;
for ( $n = $a; $n <= 10; $n++ ) {
    $factorial = 1;

    for ( $i = $n; $i > 1; $i-- ) {
        $factorial *= $i;
        $j++;

    }

    echo "Factorial of {$n} is {$factorial}\n";
}

echo "Number of operations {$j}";
echo PHP_EOL;

//Smart Coading
$factorial = 1;
$a = 1;
$j = 1;

for ( $n = $a; $n <= 10; $n++ ) {
    $factorial *= $n;
    echo "Factorial of {$n} is {$factorial}\n";
    $j++;

}

echo "Number of operations {$j}";
