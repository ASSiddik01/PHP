<?php
/**
variable start with $ sign
String store in "" sign
no space in valiable name
best practice contionusly follow one case
special chacecter is not allowed in variable
variable name start with the alphabate
in end of the every line use ; to prevent error


 */
$fName = "Abu";
$lName = "Shama";

$my_name =""; // under score mathod.wordpress follow this method
$MyName= ""; // Typo case method
$myName = "Abu Shama"; //Canel Case method.

echo $myName;
echo PHP_EOL;

$age = 23;
$myAge = "age";

echo $$myAge;
echo PHP_EOL;

echo "My name is ".$myName;
echo PHP_EOL;
echo "My name is {$myName}";
echo PHP_EOL;

