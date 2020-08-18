<?php
$callable = function(float $value):int{
    if(0 <= $value) return 1;
    return -1;
};
echo $callable(-11.2);