<?php

$name = "Al Amin";

// function change(& $name){
//     $name = "New Name";
// }

// change($name); // by Value
// echo $name;


function change(& $name){
    $name = "New Name as Fahima";
}

change($name); // by Reference
echo $name;