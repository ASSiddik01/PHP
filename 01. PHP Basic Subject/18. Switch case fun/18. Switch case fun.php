<?php

$result= "8 Balls";

switch ($result){
    case (string) "9 Balls":
    echo "Nine balls";
    break;
    case (string) "8":
    echo "Eight";
    break;
    case (string) "8 Balls":
    echo "Eight balls";
}