<?php
function average(){
    $cont = func_num_args();
    $total = 0;
    foreach(func_num_args() as $number){
        $total += $number;
    }
    return $total / $cont;
}
