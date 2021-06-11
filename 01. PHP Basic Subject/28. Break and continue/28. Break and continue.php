<?php
//break
for ($i=1;$i<10;$i++){
    if($i>5){
        break;
    }
    echo $i;
    
}
echo PHP_EOL;

//continue
for ($i=1;$i<10;$i++){
    if($i<=5){
        continue;
    }
    echo $i;
    
}