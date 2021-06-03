<?php

$fName="Abu";
$lName="Shama";

printf ('My name is %s %s',$fName,$lName);
echo PHP_EOL;
printf ('My name is %2$s %1$s',$fName,$lName); //argumnet pass method not follow this ""
echo PHP_EOL;

$number = 123.1231;
printf("%.2f",$number);
echo PHP_EOL;

printf("%08.2f",$number); //print with 0
