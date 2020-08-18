<?php
function add($param1,$param2): string
{
    if(false === is_numeric($param1)){
        throw new Exception("$param1 should be numeric");
    }
    if(false === is_numeric($param2)){
        throw new Exception("$param2 should be numeric");
    }
    $num = $param1 + $param2;
    // return "The sum $param1 and $param2: $num";
    return 'The sum of' .' '. $param1 .' '.  'and' .' '. $param2. ':' .$num;//string concatenation faster

}
echo add(4,6);