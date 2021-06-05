<?php
$function1 = false;
$function2 = false;
$function3 = true;
// if one condition is false than no condition is check
if ( $function1 && $function2 && $function3 ) {
    echo "All function is correct";
} elseif ( $function1 && $function2 ) {
    echo "Function 1 and 2 is correct";
} elseif ( $function1 ) {
    echo "Only Function 1 is correct";
} else {
    echo "All function is false";
}
