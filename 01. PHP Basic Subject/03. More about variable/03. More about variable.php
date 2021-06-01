<?php
/**
variable value is changeable
conostant name need not to $ sign
constant name declear in '' sign
define('constant name',"constant value");
constant directly printable
 */

$task = "Read";
echo $task;
echo PHP_EOL;

$task = "Write";
echo $task;
echo PHP_EOL;

define('PI',3.1416);
$constant = "constant";
echo PI;
echo PHP_EOL;
echo constant("PI");
echo PHP_EOL;
echo "The value of PI = {$constant("PI")}";