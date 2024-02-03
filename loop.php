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

// for($j=2; $j <= 10; $j++){
//     for($i = 1; $i <= 10; $i++){
//         echo $j." X ".$i." = ".$j*$i ."\n";
//     }
//     echo "\n";
//     echo "\n";
// }


// ==========foreach=========/

// $names =['Al Amin','Raj Barmon', 'Mohammad Ali', 'Monika', 'Fahima'];

// foreach($names as $sl=> $name){
//     echo "$sl => $name.\n";
// }

// ========break ======//
for($i = 0; $i <=10 ; $i++){
    if($i == 4){
     continue ;
    }
    echo $i."\n";
}
echo "\n";
for($i = 0; $i <=10 ; $i++){
    if($i == 4 || $i == 6){
     continue ;
    }
    echo $i."\n";
}

// =====Continue =========//
// for($i = 0; $i <=10 ; $i++){
//     if($i == 0){
//         continue ;
//     }
//     echo $i."\n";
// }
