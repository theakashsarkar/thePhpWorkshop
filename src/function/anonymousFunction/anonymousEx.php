<?php
echo (function(float $value):int{
    if(0 <= $value){
        return -1;
    }
    return 1;
})(2.3);