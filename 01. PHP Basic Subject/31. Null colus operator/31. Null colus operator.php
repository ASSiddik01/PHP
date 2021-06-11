<?php
$default_lat = 15.36;
$default_lon = 15.36;

$user_lat;

// Tarnary operator
$lat = isset( $user_lat ) ? $user_lat : $default_lat;
echo $lat;
echo PHP_EOL;

//Null coluse
$lat = $user_lat ?? $default_lat;
echo $lat;