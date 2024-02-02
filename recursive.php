<?php

//what is recursion function
//Recursion is a process of calling a function within itself 

// function countdown($n){
//     for($i = $n; $i > 0; $i--){
//         echo "$i \n";
        
//     }

// }

// countdown(5);
function countdown($n){
    if($n == 0 ){
        return ;
    }
   echo $n."\n";

   countdown($n-1);
}

countdown(5);


