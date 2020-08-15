<?php
$single = ["red","amber","green"];
$reversed = array_reverse($single,$preverse_key = true);
print_r($reversed);
$streets = [
    'walbrook',
    'Moorgate',//Starts with an uppercase
    'crosswall',
    'lothbury',
];
sort($streets,SORT_STRING | SORT_FLAG_CASE);
print_r($streets);
$streets = [
    'walbrook',
    'Moorgate',//Starts with an uppercase
    'crosswall',
    'lothbury',
];
sort($streets,SORT_STRING & SORT_FLAG_CASE);
print_r($streets);