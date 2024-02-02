<?php

$numbers = [1,2,3,4,5];


function square($n){
    return $n* $n;
}

function cube($n){
    return $n * $n * $n;
}

$square = array_map("square", $numbers);

print_r($square);