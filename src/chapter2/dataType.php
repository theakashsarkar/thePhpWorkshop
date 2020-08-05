<?php

$type = 4.09;
switch ( gettype( $type ) ) {
case 'interger':
case 'double':
    echo 'data type is number:';
    break;
case 'boolean':
    echo 'data type is boolean';
break;
case 'string':
    echo 'data type is string';
break;    


}