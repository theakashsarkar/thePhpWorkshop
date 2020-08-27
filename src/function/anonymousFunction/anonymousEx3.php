<?php
$a = 15;
$callabel = function() use(&$a):string{
    return $a;
};
$a = 'different';
echo $callabel();
echo PHP_EOL;