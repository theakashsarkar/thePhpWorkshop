<?php
function countMeByReference(int &$count):void{
    $GLOBALS['count']++;
}
$count = 0;
countMeByReference($count);
countMeByReference($count);
countMeByReference($count);
countMeByReference($count);
echo $count;