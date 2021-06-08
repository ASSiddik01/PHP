<?php
//1-100 devided by 7 and 11 print

for ( $n = 0; $n < 100; $n++ ) {

// echo $n . "\n";

// if ( 0 == $n % 7 ) {

//     echo $n . "\n";

// }

// if ( 0 == $n % 11 ) {

//     echo $n . "\n";

// }

// echo 0 == $n % 7 ? $n . "\n" : "";
// echo 0 == $n % 11 ? $n . "\n" : "";

}

for ( $i = 0, $j = 0; $i < 100; $i += 7, $j += 11 ) {
    echo $i . "\n";
    echo $j<100 ? $j . "\n":"";
}
