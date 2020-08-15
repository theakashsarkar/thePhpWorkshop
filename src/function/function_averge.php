<?php
function average(){
    $cont = func_num_args();
    $total = 0;
    foreach($cont as $number){
        $total += $number;
    }
    return $total / $cont;
}
