<?php
$fruits = [
    'Pear',
    'orange', // notice orange is all lowercase
    'Apple',
    'Banana'
];
//  sort($fruits,SORT_FLAG_CASE | SORT_NATURAL);
sort($fruits);
print_r($fruits);