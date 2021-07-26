<?php

// if you set default value, remember all perameter set defalult value

function serve( $food = "coffee", $numberOfItems = "1 cup" ) {
    echo "{$numberOfItems} of {$food} has/have been served";
}