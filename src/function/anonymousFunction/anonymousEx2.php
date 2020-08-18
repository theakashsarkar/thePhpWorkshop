<?php
$a = 18;
$callable = function() use($a): int{
    return $a;
};
echo $callable();
echo PHP_EOL;