<?php

for ($n=10 ,$c=1; $n>0 ;$n--,$c++){
    echo $n.":".$c;
    echo PHP_EOL;
}
echo PHP_EOL;
echo PHP_EOL;

for ($n=10 ; $n>0 ;$n--){
    echo $n.":".(11-$n);
    echo PHP_EOL;
}