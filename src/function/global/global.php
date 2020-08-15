<?php
$count = 0;
function countMe(){
    global $count;
    $count++;
    
}
countMe();
countMe();
echo $count;
function __(int $ame){
    echo "Hello {$ame}";
}
__(10);