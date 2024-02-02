<?php


// $numbers = [1,2,3,4,5,6,7,8,9,10];

// function isEven($n){
//     if($n % 2 ==0){
//         return true;
//     }
//     else{
//         return false;
//         echo "Odd Number";
//     }

// }

// $evenNumber = array_filter($numbers, "isEven");
// print_r($evenNumber);



$people = [
    ['name'=>'Al Amin', 'gender'=>'Male'],
    ['name'=>'Raj Barmon', 'gender'=>'Male'],
    ['name'=>'Fahima', 'gender'=>'Female'],
    ['name'=>'Tarif', 'gender'=>'3rd'],
    ['name'=>'Monika', 'gender'=>'Female'],
];


function isFemale($person){
     if($person['gender']=='Female'){
        return true;
     }
     else{
        return false;
     }
}
function isMale($person){
     if($person['gender']=='Male'){
        return true;
     }
     else{
        return false;
     }
}

$females = array_filter($people, "isFemale");
$Males = array_filter($people, "isMale");

print_r($Males);



