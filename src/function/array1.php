<?php
function dynamicArgs(){
    $count = func_num_args();
    $argument = func_get_args();
    if($count > 0){
        for($i = 0; $i < $count; $i++){
            echo "Argument $i: $argument[$i]";
            echo PHP_EOL;
        }

    }
}
dynamicArgs(1,2,3,4,5);