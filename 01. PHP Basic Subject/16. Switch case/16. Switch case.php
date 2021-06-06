<?php

$color = "green";

switch ( $color ) {
case "red":
    echo ucwords( $color ) . " is our favourite color";
    break;
case "green":
    echo ucwords( $color ) . " is our favourite color";
    break;
case "black":
    echo ucwords( $color ) . " is not our favourite color";
    break;
default:
    echo ucwords( $color ) . " color is ok";
}
echo PHP_EOL;

//Nested
switch ( $color ) {
case "red":
case "green":
    echo ucwords( $color ) . " is our favourite color";
    break;
case "black":
    echo ucwords( $color ) . " is not our favourite color";
    break;
default:
    echo ucwords( $color ) . " color is ok";
}
