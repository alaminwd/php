<?php

//for loop;
//while loop;
//do while loop;

// =======For Loop =========//

// for($i = 10; $i > 0; $i--){
//     echo  $i."\n";
// }

// ========While loop==========//

// $n = 0;

// while($n<=10){
//     echo $n."\n";

//     $n++;
// }


// ========Do While Loop=========//

// $n = 10;

// do{
//     echo $n."\n";
//     $n--;
// }
// while( $n >= 1);


// $n = 5;

// for($i=1; $i <=10; $i++ ){
//     $result = $n*$i;
    
//      echo $n." X ".$i." = ".$result."\n";

// }




// ========Nested for loop========/

for($j=2; $j <= 10; $j++){
    for($i = 1; $i <= 10; $i++){
        echo $j." X ".$i." = ".$j*$i ."\n";
    }
    echo "\n";
    echo "\n";
}
