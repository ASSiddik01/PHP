<?php

function factorial( int $n ) { //php7 feature
    // if(gettype($n) !="integer"){ //this is before php 7  feature
    //     return "invalid";
    // }
    $result = 1;

    for ( $i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }

    return $result;
}
