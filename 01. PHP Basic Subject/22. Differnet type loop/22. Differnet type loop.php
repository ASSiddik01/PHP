<?php
echo "For\n";
/**
 * for = cpi check condition -> print value-> incrise value
 * while =cip  check condition -> incrise value -> print value
 * do while = ipc incrise value -> print value ->check condition 
 * goto = ipc incrise value -> print value ->check condition 
 */

for ( $n = 0; $n <= 10; $n++ ) {
    echo $n . PHP_EOL;
}

echo PHP_EOL;

echo "While\n";
$n = 0;

while ( $n <= 10 ) {
    $n++;
    echo $n . PHP_EOL;
}

echo "Do while\n";
$n = 0;

do {
    $n++;
    echo $n . PHP_EOL;
} while ( $n <= 10 );

echo "GO TO\n";
$n = 0;
a:$n++;
echo $n . PHP_EOL;

if ( $n <= 10 ) {
    goto a;
}
