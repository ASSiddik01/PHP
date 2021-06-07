<?php
$n = 13;
$r = $n % 2;

if ( 0 == $r ) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo PHP_EOL;

if ( 0 == $r ):
    echo "$n";
    echo " is a even number";
else:
    echo "$n";
    echo " is a odd number";
endif;
echo PHP_EOL;

switch ( $r ):
case ( 0 == $r ):
    echo "Even Number";
    break;
default:
    echo "Odd Number";
    endswitch;

    
echo PHP_EOL;

if ( 0 == $r ):
    ?>
Even Number
    <?php
else:
    ?>
Odd Number
    <?php
endif;