<?php

// operator precedence means who is run fast

$a = false || true;
$b = false or true; // ($b=false) or ture. hare or ture has no means

var_dump ($a, $b);