<?php
/**
 * logical operator ==,!=, <,>, <=, >=
 */
$n = 13;

if ( 0 == $n % 2 ) {
    echo "{$n} is even number";
} else {
    echo "{$n} is odd number";
}

echo PHP_EOL;
echo PHP_EOL;


$rana = 100;
$rakib = 90;

if($rana >= $rakib){
    echo "Rana has more or same money then Rakib";
}elseif ( $rana < $rakib ) {
    echo "Rana has less money than Rakib";
}elseif($rana > $rakib){
    echo "Rana has more money then Rakib";
}elseif ( $rana == $rakib ) {
    echo "Rana and Rakib has same amount of money";
}
echo PHP_EOL;
echo PHP_EOL;



$age =20;

if (13<$age && 19>$age){
    echo "This person is a teenager";
}else {
    echo "This is not a teenager";
}
echo PHP_EOL;
echo PHP_EOL;

$food= "Lichi";

if ("Orange" == $food || "Tarmind"==$food){
    echo "It has contain vitamin C";
}elseif ("Apple"==$food){
    echo "It has contain vitamin A";
}else {
    echo "We don't about this food";
}


