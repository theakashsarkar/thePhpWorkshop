<?php
// $basket = [             
//        ["Mango", "Apple", "Banana", "Orange"],    
//        ["Burger", "Fries", "Sandwich", "Brownie", "Soda"]  
//     ];

//     // for($i = 0; $i < count($basket);$i++){
//     //     for($j = 0; $j < count($basket[$i],$j++){
//     //         echo $basket[$i][$j]  . PHP_EOL;
//     //     }
//     // }
//     foreach ($basket as $foodItems) {        
//         foreach ($foodItems as $food) {  
//              echo $food . PHP_EOL; 
//         }
//     }




$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =  ["Mathematics", "Computer Programming", "Business English",   "Graph Theory"];

$totalSubjects = sizeof($subjects);
echo $totalSubjects;
foreach($professions as $profession){
     echo "professions in $profession". PHP_EOL;
     for($i = 0; $professions === 'Teacher' && $i < $totlaSubjects; $i++){
        echo " ". $subjects[$i] . PHP_EOL;
     }
}