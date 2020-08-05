<?php
// $index = 1;
// for ( ;; ) {
//     if ( $index < 10 ) {
//         echo "break";
//         echo $index++ ;
//         echo $index ;
//         break;
//     }
//     echo $index ."\n";
// }
$days = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday",   "Thursday", "Friday"];
$totalDayes = count($days);
for($i = 0; $i < $totalDayes; $i++){
    echo $days[$i]." ";
}