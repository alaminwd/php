<?php


// function add($x1, $x2){
//     echo "Addting $x1, $x2";
// }

// function divide($x, $x2){
//     echo "Devide $x1, $x2";
// }

// function process($n1, $n2, $cb){
//     $cb($n1, $n2);
// }

// process(10, 20, "add");



function add($x1, $x2){
    echo "Addting $x1, $x2";
}

function divide($x, $x2){
    echo "Devide $x1, $x2";
}

function process($n1, $n2, $cb){
    if(is_callable($cb)){
        $cb($n1, $n2);
    }
    else{
        echo "Sorry $cb is not collable";
    }
}

process(10, 20, "multiple");

