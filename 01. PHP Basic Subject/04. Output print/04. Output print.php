<?php

/**
 * String = "Shama"
 * int = 1234
 * float = 2.3322
 * boolen = ture 
 * Null = null
 * Array = array()
 * Resource
 * Object
 */

$name="Abu Shama";
var_dump ($name);
echo 'I\'m '.$name;
echo PHP_EOL;
echo "I'm {$name}"; // this is good practise
echo PHP_EOL;
echo 'I"m ' .$name;
echo PHP_EOL;



$fName="Abu";
$lName="Shama";
printf("My %s name is %s %s","full",$fName,$lName);

